<?php 
session_start();
$userid = $_SESSION['user_id'];
$auto = $_SESSION['autoo'];
$bak = $_POST['bak'];
$dopłata = 0;
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
echo $data_zwrot;
?>



