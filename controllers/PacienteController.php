<?php
require_once 'app/model/Paciente.php';

class PacienteController {

    public function cadastrarPaciente() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $paciente = new Paciente();

            $paciente->nome = $_POST['nome'];
            $paciente->data_nascimento = $_POST['data_nascimento'];
            $paciente->cpf = $_POST['cpf'];
            $paciente->convenio = $_POST['convenio'];
            $paciente->telefone = $_POST['telefone'];

            if ($paciente->cadastrar()) {
                echo "Paciente cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o paciente.";
            }
        }
    }

    // Definindo os métodos para evitar erros de chamada
    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/cadastro.html';
    }

    public function saveBook() {
        echo "Salvar cadastro do paciente.";
    }

    public function listBooks() {
        echo "Listar todos os pacientes.";
    }
}
