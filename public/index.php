<?php

require_once '../app/controller/FormController.php';
require_once '../app/controller/SummaryController.php';
require_once '../app/controller/SuccessController.php';

$page = $_GET['page'] ?? 'neuhaeusl';

switch ($page){
    case 'neuhaeusl':
        $controller = new FormController();
        $controller->index();
        break;
    case 'summary':
        $controller = new SummaryController();
        $controller->show();
        break;
    case 'success':
        $controller = new SuccessController();
        $controller->execute();
        break;
    default:
        http_response_code(404);
        include '../app/view/_404.php';
        break;
}