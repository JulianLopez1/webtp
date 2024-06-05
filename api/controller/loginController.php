<?php
require_once 'api/view/loginView.php';
require_once 'api/model/loginModel.php';
class loginController
{
    private $model;
    private $view;
    private $err;
    public function __construct()
    {
        $this->view = new loginView();
        $this->model = new loginModel();
    }

    function showLogin()
    {
        $this->view->showLogin();

    }
    function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
            $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            if ($nombre && $pass) {

                $usuario = $this->model->getUser($nombre);


                if ($usuario && password_verify($pass, $usuario->password)) {

                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['USERNAME'] = $usuario->nombre;
                    $_SESSION['ROLE'] = $usuario->rol;


                    header("Location: " . BASE_URL . "home");
                    exit();
                } else {

                    $this->view->showLogin("Usuario o contraseña incorrectos");
                }
            } else {

                $this->view->showLogin("Faltan datos obligatorios");
            }
        }
    }
    function logout()
    {
        session_start();
        session_destroy();
        header("Location:" . BASE_URL . "showLogin");
        die();

    }
}
