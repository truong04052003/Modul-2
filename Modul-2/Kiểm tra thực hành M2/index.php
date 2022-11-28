<?php
include_once 'db.php'; //$conn
// include_once '';
$controller = 'Patients';
if (isset($_GET['controller']) && $_GET['controller'] != '') {
    $controller = $_GET['controller'];
}


// Gọi Controller
switch ($controller) {
    case 'Patients':
        include_once 'controllers/PatientsController.php';
        $objController =  new PatientsController();
        break;
    case 'Preventions':
        include_once 'controllers/PreventionsController.php';
        $objController =  new PreventionsController();
        break;
    default:
        echo 'không có';
        break;
}

$page = 'list';
if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = $_GET['page'];
}
// Gọi page
switch ($page) {
    case 'list':
        $objController->list();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}
