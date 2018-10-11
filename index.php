<?php
require_once("models/bd.php");
$controller = 'crud';
if(!isset($_REQUEST['controller'])) {
    require_once("controllers/crud.controller.php");
    $controller = $controller . "_controller";
    $controller = new $controller;
    $controller->Index();
}else{
    $controller = strtolower($_REQUEST['controller']);
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'home';
    require_once("controllers/$controller.controller.php");
    $controller = $controller . '_controller';
    $controller = new $controller;
    call_user_func( array($controller, $action));
}
?>
