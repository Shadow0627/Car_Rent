<?php 
session_start();
if(isset($_POST['nrdom'])){
$imie = trim($_POST['imie']);
$nazwisko = trim($_POST['nazwisko']);
$phonenum = trim($_POST['phonenum']);
$email = trim($_POST['email']);
$date = trim($_POST['date']);
$miejscowosc = trim($_POST['miejscowosc']);
$zipcode = trim($_POST['zip-code']);
$ulica = trim($_POST['ulica']);
$nrdom = trim($_POST['nrdom']);
$nrmieszkanie = trim($_POST['nrmieszkanie']);
$from = trim($_POST['from']);
$to = trim($_POST['to']);
$userid = trim($_POST['_userid']);
$carid = trim($_POST['car_id']);
$id = $_SESSION['user_id'];
$cena = trim($_POST['cena']);
}
else
{
    print('nie podano danych !');
    die();
}
include('db.php');
$sql = "INSERT INTO klient (imie, nazwisko, numer_telefonu, email, data_urodzenia, miejscowosc, kod_pocztowy, ulica, numer_domu, numer_mieszkania, ID_user) VALUES ('" .$imie. "', '" .$nazwisko. "', '" .$phonenum. "', '" .$email. "', '" .$date. "', '" .$miejscowosc. "', '" .$zipcode. "', '" .$ulica. "', '" .$nrdom. "', '" .$nrmieszkanie. "', '" .$id. "')";
if(mysqli_query($conn, $sql))
{
    $sql = "SELECT MAX(id_wynajmu) AS max FROM wynajecie WHERE id_auto=" .$carid. "";
    $done = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($done))
    {
        $last_id =  $row['max'];
    }
    $sql = "SELECT przebieg_zwrot FROM zwrot WHERE id_wynajmu = " .$last_id. "";
    $done = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($done))
    {
        $przebieg = $row['przebieg_zwrot'];
    }
$sql = "SELECT MAX(id_klient) AS last FROM klient";
$done = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($done))
{
    $klientid = $row['last'];
}
$datetime1 = new DateTime($from);
$datetime2 = new DateTime($to);
$interval= date_diff($datetime1, $datetime2);
$cena = $interval->format('%a') * $cena;
$mess = "pełny bak";

$sql = "SELECT id_pracownik FROM pracownik WHERE stanowisko_pracownik = 'pomoc'";
$done = mysqli_query($conn, $sql);
$num = mysqli_num_rows($done);
$abc = array();
$i = 0;
while($row = mysqli_fetch_array($done))
{
    if($i != $num)
    {
    $abc[$i] = $row['id_pracownik'];
    $i++;
    }
}
$arrlg = count($abc);
$pracownik = rand($min = 0, $arrlg);


    $sql = "INSERT INTO wynajecie (id_auto, id_klient, data_wynajecia, data_zwrot_plan, czas_wynajmu, przebieg_przed, ilosc_paliwa, cena_wynajmu, id_pracownik) VALUES ('" .$carid. "', '" .$klientid. "', '" .$from. "', '" .$to. "', '" .$interval->format('%a'). "', '" .$przebieg. "', '" .$mess. "', '" .$cena. "', '" .$pracownik. "')";
    if(mysqli_query($conn, $sql))
    {
        print('
        header("Location: ../index.php")
        ');
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>