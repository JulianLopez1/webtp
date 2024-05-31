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
            // Filtrar y validar entradas
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
            $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
            if ($nombre && $pass) {
                // Obtener el usuario desde el modelo
                $usuario = $this->model->getUser($nombre);
        
                // Verificar si el usuario existe y la contraseña es correcta
                if ($usuario && password_verify($pass, $usuario->password)) {
                    // Iniciar sesión si no está iniciada
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['USERNAME'] = $usuario->nombre;
                    $_SESSION['ROLE'] = $usuario->rol;
        
                    // Redirigir al usuario a la página de inicio
                    header("Location: " . BASE_URL . "home");
                    exit();
                } else {
                    // Mostrar mensaje de error si el usuario o la contraseña son incorrectos
                    $this->view->showLogin("Usuario o contraseña incorrectos");
                }
            } else {
                // Mostrar mensaje de error si faltan datos obligatorios
                $this->view->showLogin("Faltan datos obligatorios");
            }
        }
        }
        function logout(){
            session_start();
            session_destroy();
            header("Location:" . BASE_URL . "showLogin");die();
    
        }
    }
