<?php
if(isset($_POST['pass-reg-again'])){
$login = trim($_POST['login-reg']);
$email = trim($_POST['email-reg']);
$phone = trim($_POST['phone-reg']);
$pass = trim($_POST['pass-reg']);
$pass_again = trim($_POST['pass-reg-again']);
}
else
{
    echo "błąd";
    die();
}

if($pass === $pass_again)
{
    echo "hasło ok";
    $pass_ok = $pass;
}
else
{
    echo "hasło nie ok";
    die();
}

require("db.php");
$sql = "SELECT login FROM user WHERE login = '" .$login. "' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo "urzytkownik istnieje";
    die();
}

$sql = "INSERT INTO user (password, email, phonenumber, login, class) VALUES ('" .$pass_ok. "', '" .$email. "', '" .$phone. "', '" .$login. "', 'client' )";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    die();
}
session_start();
$_SESSION['login'] = 1;
$_SESSION['u'] = $login;
header("Location: ../index.php");


mysqli_close($conn);
?>
