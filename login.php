<?php
require_once("connect.php");
$login = $_POST['login'];
$pass = $_POST['password'];

$conn = new mysqli($host,$db_user,$db_pass,$db_name);
$wynik = $conn -> query("SELECT * from users WHERE login='$login' AND password='$pass'");
$wynik = $wynik -> fetch_assoc();
if($wynik['id']!=0)
{
        $id = $wynik['id'];
    $login = $wynik['nazwa_wyswietl'];
    setcookie("userid", $id, time()+1800);
    setcookie("login", $login, time()+1800);
    header("Location: index.php");
    exit();

} else {
session_start();
$_SESSION['msg'] = "<font color='red'>Niepoprawny login lub hasło</font>";
header("Location: zaloguj.php");
}

?>






TEST Z LAPTOPA
TEST ZE STACJONARKI
