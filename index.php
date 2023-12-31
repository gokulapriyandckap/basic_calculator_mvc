<?php


require_once 'controller/userController.php';

$controllers = new userController();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'create';
            $controllers->create($_POST);
            break;
        case 'delete';
            $controllers->delete($_POST);
            break;
        case 'edit';
            $controllers->read($_POST);
            break;
        case 'update';
            $controllers->update($_POST);
            break;
        default:
            $controllers->index();
            break;
    }
} else {
    $controllers->index();
}