<?php
require_once 'api/view/loginView.php';
require_once 'api/model/loginModel.php';
class loginController
{
    private $model;
    private $view;
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
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $nombre = $_POST['email'];
                $pass = $_POST['password'];
                // $pass = '1234';
                // echo password_hash($pass,PASSWORD_DEFAULT);
                // echo '<br>';
                // echo '<br>';
                // echo '<br>';
                // echo '<br>';
                // var_dump($nombre, $password);
                // die;
                $usuario = $this->model->getUser($nombre);
                // var_dump($usuario);
                if ($usuario) {
                   
                    header("Location:" . BASE_URL . "home");
                 } 
                // else {
                //     $this->view->showLogin("Usuario incorrecto");
                // }
            }
            //  else {
            //     $this->view->showLogin("faltan datos obligatorios");
            // }
        }
    }
}