<?php 
session_start();
$userid = $_SESSION['user_id'];
$auto = $_SESSION['autoo'];
$bak = $_POST['bak'];
$dopłata = 0;
$_SESSION['km'] = $_POST['km'];
if($bak == "10")
{
$dopłata = $dopłata +0;
}
else{
    if($bak == "5")
    {
        $dopłata = $dopłata + 200;
    }
    else
    {
        if($bak == "0")
        {
            $dopłata = $dopłata + 400;
        }
    }
}


include("db.php");



$sql = 'SELECT data_zwrot_plan FROM wynajecie WHERE id_auto = "' .$auto. '" AND id_klient = "' .$_SESSION['id_klient']. '"';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$data_zwrot = $row['data_zwrot_plan'];
$to =date('y-m-d');
$datetime1 = new DateTime($data_zwrot);
$datetime2 = new DateTime($to);
$interval= date_diff($datetime2, $datetime1);
$p2 = $interval->format('%a');
$p2 = (int)$p2;
$p2 = (float)$p2;
if($p2 > 0)
{
    $p1 = $p2 * 200;
    $dopłata = $dopłata + $p1;
}
$_SESSION['doplata'] = $dopłata;
$_SESSION['bak'] = $bak;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dopłata</title>
    <style>
    body
    {
        width: 100%;
        margin: 0px !important;
        padding: 0px !important;
    }
    div
    {
        width: 60%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 4px solid black;
        box-shadow: 5px 5px rgba(0,0,0,0.5);
        margin-left: 20%;
        margin-top: 10vh;
    }

    </style>
</head>
<body>
    <div>
    <h2>Należy dopłacić: <?php echo $dopłata;  ?> zł</h2>
    <p>Pomoc przy tej czynności pod numerem: 87 09 192 2</p>
    <a href="gogo.php">Przejdz dalej !</a>
    </div>
</body>
</html>



