<?php
// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';
require_once '../controllers/MedicoController.php';
require_once '../controllers/AdmControllers.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    case '/Projeto_clinica/public/':
        $controller = new PacienteController;
        $controller->showForm();
        break;
    case '/Projeto_clinica/public/Paciente/save':
        $controller = new PacienteController;
        $controller->cadastrarPaciente();
        break;
    case '/Projeto_clinica/public/Medico/save':
        $controller = new MedicoController;
        $controller->cadastrarMedico();
        break;
    case '/Projeto_clinica/public/Medico/Home':
        $controller = new MedicoController;
        $controller->showFormMedico();
        break;

    case '/Projeto_clinica/views/paginas/paciente_list':
        $controller = new PacienteController;
        $controller->list();
        break;
    case '/Projeto_clinica/public/Administrador/show':
        $controller = new AdmController;
        $controller->showFormAdm();
        break;
    case '/Projeto_clinica/public/pipi/save':
        $controller = new AdmController;
        $controller->cadastrarAdmin();
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}

