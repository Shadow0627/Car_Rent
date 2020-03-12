<?php
session_start();
$id = $_POST['id'];
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Car Rent - dokonaj wynajęcia</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="Piotr Porwit">
        <meta name="description" content="Stona do wynajmowania aut w szczecinie">
        <meta name="keywords" content="auto,rent,carrent,wyajmowanie aut,szczecin">
        <link rel="stylesheet" href="../style/rent.css">
        <link rel="shortcut icon" href="image/icon/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </head>
    <body>
        <section>
            <form action="rent-again.php" method="POST">
                <p>Imie:</p><input type="text" name="imie" required><br>
                <p>Nazwisko:</p><input type="text" name="nazwisko" required><br>
                <p>Numer Telefonu:</p><input type="text" name="phonenum" required><br>
                <p>Email:</p><input type="email" name="email" required><br>
                <p>Data urodzenia:</p><input type="date" name="date" required><br>
                <p>Miejscowośc:</p><input type="text" name="miejscowosc" required><br>
                <p>Kod pocztowy:</p><input type="text" name="zip-code" required><br>
                <p>Ulica:</p><input type="text" name="ulica" required><br>
                <p>Numer domu:</p><input type="text" name="nrdom" required><br>
                <p>Numer mieszkania:</p><input type="text" name="nrmieszkanie" required><br>
                <p>Od dnia:</p><input type="date" name="from" required><br>
                <p>Do dnia:</p><input type="date" name="to" required><br>
                <input type="hidden" value="<?php echo $_SESSION['user_id']; ?>" name="_userid">
                <input type="hidden" value="<?php echo $id;?>" name="car_id">
                <input type="submit" value=" wyanjmij!">
            </form>
        </section>
    </body>
    