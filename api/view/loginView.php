<?php
require_once "api/view/view.php";
class loginView extends view{

    function showLogin($msj = null){
      $this->smarty->display('login.tpl');

    }
}