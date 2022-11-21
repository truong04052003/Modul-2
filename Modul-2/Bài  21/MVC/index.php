====================MẶT HÀNG=====================
<?php
echo '<br>'.'<br>';

?>
<?php
include_once 'db.php';
$page = 'list';
if( isset( $_GET['page'] ) && $_GET['page'] != '' ){
    $page = $_GET['page'];
}
// Gọi Controller
include_once 'controllers/MatHangController.php';
include_once 'controllers/LoaihangController.php';

$objController =  new MatHangController();
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
echo '<br>';
$objController =  new LoaihangController();
switch ($page) {
    case 'loaihang/list':
        $objController->list();
        break;
    case 'loaihang/add':
        $objController->add();
        break;
    case 'loaihang/edit':
        $objController->edit();
        break;
    case 'loaihang/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}

?>


