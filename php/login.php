<?php 
include('db.php');
$logn = $_POST['login-name'];
$pass = $_POST['passwd-login'];
$login1 = trim($logn);
$pass1 = trim($pass);
session_start();
if($conn->connect_error)
{
    die("błąd połączenia" . $conn->connect_error);
}
$sql= 'SELECT * FROM user WHERE login="' . $login1 . '" AND password="' .$pass1. '"';

   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error( $conn ));
   } 
   if(mysqli_num_rows($retval) == 1){
    $_SESSION["login"] = 1;
	   $_SESSION['u'] = $login1;
	   while($row = mysqli_fetch_array($retval)){
      $_SESSION['class'] =$row['class'];
      $_SESSION['user_id'] = $row['ID_user'];
	   }
	  header("Location: ../index.php");
	   }
	   else
	   {
           echo "blad logowania";
		   header("Location: ../index.php");
   }


