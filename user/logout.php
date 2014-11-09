<?php
    session_start();
    $_SESSION['SESS_USER_ID'] = '';
    $_SESSION['SESS_NIM'] = '';
    $_SESSION['SESS_EMAIL'] = '';
    $_SESSION['SESS_USER_FULLNAME'] = '';
    $_SESSION['SESS_USER_NICKNAME'] = '';
    $_SESSION['SESS_KEY'] = '';
    $_SESSION['profilepicture'] = '';
    $_SESSION['SESS_USER_ANGKATAN'] = '';

    $errmsg_arr[] = 'Successfully Logout';
    $errflag = true;

    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;

    header("Location: ../index.php");
?>