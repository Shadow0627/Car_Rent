<?php
include("db.php");


if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM auto ";
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
            <p>Data produkcji:' .$row["data_produkcji"]. '</p><br>
            <p>Pojemność silnika: ' .$row["pojemnosc_silnika"]. '</p><br>
            <p>Kolor: ' .$row["kolor"]. '</p><br>
            <p>Skrzynia biegów: ' .$row["skrzynia_biegow"]. '</p><br>
            <p>Cena za dzień: ' .$row["cena_dzien"]. ' zł</p>
    
    ');
    if(isset($_SESSION["login"])){
    
    print('
    <form action="php/rent.php" method="POST">
        <input type="hidden" name = "id" value = "' .$row["id_auto"]. '">
        <input type="hidden" name = "cost" value = "' .$row["cena_dzien"]. '">
        <input type="submit" value = "WYNAJMI MNIE !">
    </form>
    ');}
    else
    {
        print('<p>Zaloguj się aby wynająć</p>');
    }
    print('
    </div>
    </article>
        ');
}
    
$conn->close();
?>