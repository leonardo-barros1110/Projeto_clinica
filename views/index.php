<?php
// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];
$controller = new PacienteController();

switch ($request) {
    case '/':
    case '/index':
    case '/index.php':
        $controller->showForm();
        break;
    case '/save-book':
        $controller->saveBook();
        break;
    case '/list-books':
        $controller->listBooks();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}

