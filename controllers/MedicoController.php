<?php
require_once '../model/medico.php';

class MedicoController {

    public function cadastrarMedico() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $medico = new medico();

            $medico->nome = $_POST['nome'];
            $medico->email = $_POST['email'];
            $medico->crm = $_POST['crm'];
            $medico->especialidade = $_POST['especialidade'];
            $medico->telefone = $_POST['telefone'];
            $medico->endereco = $_POST['endereco'];

            if ($medico->cadastrarMed()) {
                echo "Medico cadastrado com sucesso!";
                
            } else {
                echo "Erro ao cadastrar o Medico.";
            }
        }
    }

    // Definindo os métodos para evitar erros de chamada
    public function showFormMedico() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/cadastroMedico.html';
    }

    public function saveBook() {
        echo "Salvar cadastro do medico.";
    }

    public function listBooks() {
        echo "Listar todos os medicos.";
    }
}
