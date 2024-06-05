<?php

class loginHelpers
{
    static public function getSession()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    static public function checkLogged()
    {
        self::getSession();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header('Location: ' . BASE_URL . "showLogin");
            die();
        } else {
            return true;
        }
    }

    static public function isLogged()
    {
        self::getSession();
        if (!isset($_SESSION['IS_LOGGED'])) {
            return false;
        }
        return true;
    }

}