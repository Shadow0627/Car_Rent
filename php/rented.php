<?php
$userid = $_SESSION['user_id'];
require 'db.php';
$sql = "SELECT MAX(id_klient) AS MAX FROM klient WHERE ID_user = '" .$userid. "'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
    $klient_id =  $row['MAX'];
}
 $sql = "SELECT * FROM wynajecie WHERE id_klient = " .$klient_id. "";
 $result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
    $from = $row['data_wynajecia'];
    $to = $row['data_zwrot_plan'];
    $cost = $row['cena_wynajmu'];
    $sql = "SELECT * FROM auto WHERE id_auto = " .$row['id_auto']. "";
$result = $conn -> query($sql);
while($row = $result->fetch_assoc())
{
    print
    ('
    <article>
        <div class="photo">
            <img src = "./image/cars/'.$row['zdj'].'" alt = "' .$row["zdj"]. '">
        </div>
        <div class="opis">
            <p>Marka:' .$row["marka"]. '</p><br>
            <p>Model: ' .$row["model"]. '</p><br>
            <p>Data wynajęcia:' .$from. '</p><br>
            <p>Data zwrotu: ' .$to. '</p><br>
            <p>Cena wynajmu: ' .$cost. '</p><br>
    
    ');
    if(isset($_SESSION["login"])){
    
    print('
    <form action="php/back.php" method="POST">
        <input type="hidden" name = "id" value = "' .$row["id_auto"]. '">
        <input type="submit" value = "Zwróć mnie !">
    </form>
    ');}
}}
?>