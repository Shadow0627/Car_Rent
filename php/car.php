<?php

include("db.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT marka, model, data_produkcji, pojemnosc_silnika, kolor, skrzynia_biegow, cena_dzien, zdj FROM auto ";
$result = $conn -> query($sql);
while($row = $result->fetch_assoc())
{
    print
    ('
    <div class="photo"><img src = "./image/cars/'.$row['zdj'].'" alt = "' .$row["zdj"]. '"></div><div class="opis">
    <p>Marka:' .$row["marka"]. '</p><br>
    <p>Model: ' .$row["model"]. '</p><br>
    <p>Data produkcji:' .$row["data_produkcji"]. '</p><br>
    <p>Pojemność silnika: ' .$row["pojemnosc_silnika"]. '</p><br>
    <p>Kolor: ' .$row["kolor"]. '</p><br>
    <p>Skrzynia biegów: ' .$row["skrzynia_biegow"]. '</p><br>
    <p>Cena za dzień: ' .$row["cena_dzien"]. ' zł</p>
    </div>
        ');
}
$conn->close();
?>