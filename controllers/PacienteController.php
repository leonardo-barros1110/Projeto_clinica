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








            if ($paciente->cadastrarPac()) {
                echo "Paciente cadastrado com sucesso!";
                
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
    public function list(){
        $paciente =new Paciente();
        $pacientes = $paciente->getAll();
        require_once '../views/paginas/paciente_list.php';
    }
}
