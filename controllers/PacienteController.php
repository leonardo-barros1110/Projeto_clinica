<?php
require_once '../model/Paciente.php';

class PacienteController {

    public function cadastrarPaciente() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $paciente = new Paciente();

            $paciente->nome = $_POST['nome'];
            $paciente->data_nascimento = $_POST['data_nascimento'];
            $paciente->cpf = $_POST['cpf'];
            $paciente->convenio = $_POST['convenio'];
            $paciente->telefone = $_POST['telefone'];
            $paciente->email = $_POST['email'];
            $paciente->endereco = $_POST['endereco'];
            if ($paciente->cadastrarPac()) {
                header('Location: /projeto_clinica/views/paginas/paciente_list');
    
            } else {
                echo "Erro ao cadastrar o paciente.";
            }
        }
    }
    // Definindo os métodos para evitar erros de chamada
    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/cadastrodpPacinte.html';
    }

    public function saveBook() {
        echo "Salvar cadastro do paciente.";
    }

    public function listBooks() {
        echo "Listar todos os pacientes.";
    }
    public function list() {
        $paciente = new Paciente();
        $pacientes = $paciente->getAll();
        include '../views/paginas/paciente_list.php';
    }
    public function showUpdateForm($id) {
        $paciente = new Paciente();
        $pacientes = $paciente->getByCpf($id);
        include '../views/paginas/atualizar.php'; // Inclua o arquivo do formulário de atualização
    }
    public function updatePac() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->nome = $_POST['nome'];
            $paciente->data_nascimento = $_POST['data_nascimento'];
            $paciente->endereco = $_POST['endereco'];
            $paciente->telefone = $_POST['telefone'];
            $paciente->email = $_POST['email'];
            $paciente->convenio = $_POST['convenio'];
            $paciente->cpf = $_POST['cpf'];

            if ($paciente->update()) {
                header('Location: /projeto_clinica/views/paginas/paciente_list');
            } else {
                echo "Erro ao atualizar o paciente.";
            }
        }
    }
}
