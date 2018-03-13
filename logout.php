<?php
    session_start();
    setcookie("userid", "", time()-1);
    setcookie("login", "", time()-1);
    unset($_COOKIE['login']);
    $_SESSION['logout'] = "<font color='green'><b>Wylogowano</b></font>";
    header("Location: index.php");

?>
