<?php
require_once '../model/adm.php';

class AdmController {

    public function cadastrarAdmin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $adm = new adm();
            $adm->nome = $_POST['nome'];
            $adm->email = $_POST['email'];
            $adm->endereco = $_POST['endereco'];
            $adm->telefone = $_POST['telefone'];
            $adm->departamento = $_POST['departamento'];


            if ($adm->cadastrarAdm()) {
                echo "Adminstrador cadastrado com sucesso!";
                
            } else {
                echo "Erro ao cadastrar o Administrador.";
            }
        }
    }

    // Definindo os métodos para evitar erros de chamada
    public function showFormAdm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/cadastroAdm.html';
    }

    public function saveBook() {
        echo "Salvar cadastro do Adminstrador.";
    }

    public function listBooks() {
        echo "Listar todos os Administrador.";
    }
}
