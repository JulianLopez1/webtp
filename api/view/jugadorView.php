<?php
require_once "api/view/view.php";
class jugadorView extends view {

  function showJugadores($jugadores, $representantes){

      $this->smarty->assign("representantes", $representantes);
      $this->smarty->assign("jugadores", $jugadores);
      $this->smarty->display('tableJugadores.tpl');
   
  }
      

  function showJugador($jugador){

      $this->smarty->assign("jugador", $jugador);
      $this->smarty->display('showJugador.tpl');
 
  }
  function showJugadoresFRep($jugadores, $representante){
    $this->smarty->assign("representante", $representante);
    $this->smarty->assign("jugadores", $jugadores);
    $this->smarty->display('ShowJugadorFRep.tpl');
  }
}