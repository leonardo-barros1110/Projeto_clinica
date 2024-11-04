<?php
// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    case '/Projeto_clinica/public/':
        $controller = new PacienteController;
        $controller->showForm();
        break;
    case '/Projeto_clinica/public/save':
        $controller = new PacienteController;
        $controller->cadastrarPaciente();
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}

