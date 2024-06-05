<?php
require_once "api/view/view.php";
class ErrorView extends View
{
    function showErr($msj)
    {
        $this->smarty->assign("msj", $msj);
        $this->smarty->display('Error.tpl');
    }
}