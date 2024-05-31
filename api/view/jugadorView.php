<?php

require_once "api/view/view.php";
class jugadorView extends view {

  function showJugadores($jugadores, $representantes){
    if( $this->checkLogged()){
      $this->smarty->assign("representantes", $representantes);
      $this->smarty->assign("jugadores", $jugadores);
      $this->smarty->display('tableJugadores.tpl');
    }else{
      echo'nada';
    }
  }
      

  function showJugador($jugador){
    if( $this->checkLogged()){
      $this->smarty->assign("jugador", $jugador);
      $this->smarty->display('showJugador.tpl');
    }else{
      echo'nada';
    }
   
  }

  public function checkLogged() {
    if (session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    if (!isset($_SESSION['IS_LOGGED'])) {
        header('Location: ' . BASE_URL . "showLogin");
        die();  
    } else{

        return true;
    } 
}

}