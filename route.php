<?php
require_once 'api/controller/jugadorController.php';
require_once 'api/controller/loginController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'showLogin';
}
$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        $controller = new jugadorController();
        $controller->showTasks();
        break;
        case 'addJugador':
            $controller = new jugadorController();
            $controller->newJugador();
            break;
        case 'showJugador':
            $controller = new jugadorController();
            $controller->showJugador($params[1]);
            break;
        case 'showLogin':
            $controller = new loginController();
            $controller->showLogin();
            break;
        case 'verify':
                $controller = new loginController();
                $controller->verify();
             break;
    default:
       echo"404 not foundd";
}



