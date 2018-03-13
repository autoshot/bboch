<?php

require_once("connect.php");

$conn = new mysqli($host,$db_user,$db_pass,$db_name);

$id = $_GET['id'];

echo ("Odebrano ID $id")

?>
