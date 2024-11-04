<?php
require_once '../model/medico.php';

class PacienteController {

    public function cadastrarmedico() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $paciente = new Paciente();

            $paciente->nome = $_POST['nome'];
            $paciente->data_nascimento = $_POST['email'];
            $paciente->cpf = $_POST['crm'];
            $paciente->convenio = $_POST['especialidade'];
            $paciente->telefone = $_POST['telefone'];
            $paciente->email = $_POST['endereco'];

            if ($paciente->cadastrar()) {
                echo "Medico cadastrado com sucesso!";
                
            } else {
                echo "Erro ao cadastrar o Medico.";
            }
        }
    }

    // Definindo os métodos para evitar erros de chamada
    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/cadastrodpPacinte.html';
    }

    public function saveBook() {
        echo "Salvar cadastro do medico.";
    }

    public function listBooks() {
        echo "Listar todos os medicos.";
    }
}
