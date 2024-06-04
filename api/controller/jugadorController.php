<?php
 require_once 'api/model/model.php';
 require_once "api/view/jugadorView.php";
 require_once "api/model/jugadorModel.php";
 require_once "api/model/representanteModel.php";
class jugadorController{
    private $modelR;
    private $model;
    private $view;
    private $err;
    public function __construct()
    {
        $this->modelR = new representanteModel();
        $this->model = new jugadorModel();
        $this->view = new jugadorView();
    }
     function deleteJugador($id) {
        if (!empty($id)) {
            $this->model->delete($id);
            header("Location: " . BASE_URL . "home");
        } else {
            echo "ID no válido.";
        }
        }
    function showJugadores(){
         $jugador = $this->model->getAll();
         $representante = $this->modelR->getAllRepresentante();
         $this->view->showJugadores($jugador, $representante);
    }

    function showJugadoresFRep(){
        $jugador = $this->model->getAll();        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST['representante_id'] !== ""){
                    $representante = $_POST['representante_id'];
                    $this->view->showJugadoresFRep($jugador, $representante);
         }
   }
}
    function newJugador(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) && !empty($_POST['apellido'])&&
            !empty($_POST['club'])  && $_POST['representante_id'] !== ""
            ){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $club = $_POST['club'];
                $representante = $_POST['representante_id'];
                $this->model->insert($nombre, $apellido, $club, $representante);
                header("Location:" .BASE_URL. "home");             

            }else{
                echo'algo fallo';
            }
        }
    }
    function showJugador($id){
        $jugador =  $this->model->getJugador($id);
        if($jugador){
            $this->view->showJugador($jugador);
        }
    }
}