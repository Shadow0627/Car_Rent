<?php
session_start();
$userid = $_SESSION['user_id'];
$klient_id = $_SESSION['id_klient'];
$auto = $_SESSION['autoo'];
$doplata = $_SESSION['doplata'];
$bak = $_SESSION['bak'];
$km = $_SESSION['km'];
$sql = "SELECT MAX(id_wynajmu) AS maxxx FROM wynajecie WHERE id_klient = '" .$klient_id. "' AND id_auto = '" .$auto. "'";
include('db.php');

?>