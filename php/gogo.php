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
$query = mysqli_query($conn, $sql);
$done = mysqli_fetch_array($query);
$id_wynajmu = $done['maxxx'];
$data = date('y-m-d');
$sql = "INSERT INTO zwrot (id_wynajmu, data_zwrotu, przebieg_zwrot, ilosc_paliwa, doplata) VALUES ('" .$id_wynajmu."', '" .$data."', '" .$km."', '" .$bak."', '" .$doplata."')";
if(mysqli_query($conn, $sql))
{
    header('Location: /index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
}
?>