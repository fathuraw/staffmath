<?php
    function sessioncheck(){
        //Start session
        session_start();
        //Check whether the session variable SESS_KEY is not present
        if(!isset($_SESSION['SESS_KEY']) || (trim($_SESSION['SESS_KEY']) == '')) {
            header("location: ../index.php");
            exit();
        }
    }

    function validLoginCheck() {
        //Start session
        $sessionExist=123;
        //session_start();
        //Check whether the session variable SESS_KEY is present or not
        if(!isset($_SESSION['SESS_KEY']) || (trim($_SESSION['SESS_KEY']) == '')) {
            $sessionExist=456;
        }
        return $sessionExist;
    }
?>