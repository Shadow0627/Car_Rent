<?php
session_start();
$auto = $_POST['id'];
$userid = $_SESSION['user_id'];
$_SESSION['autoo'] = $auto;
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Car Rent - dokonaj zwrotu</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="Piotr Porwit">
        <meta name="description" content="Stona do wynajmowania aut w szczecinie">
        <meta name="keywords" content="auto,rent,carrent,wyajmowanie aut,szczecin">
        <link rel="stylesheet" href="../style/back.css">
        <link rel="shortcut icon" href="image/icon/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </head>
    <body>
        <section>
            <p>Uzupełnij Formulaż zwrotu samochodu</p>
            <form action="back-again.php" method="POST">
                <label>Stan paliwa</label><select name="bak" id="done">
                    <option value="0">Pusty</option>
                    <option value="5">Pół pełny</option>
                    <option value="10">Pełny</option>
                </select><br>
                <label>Przejechane kilometry</label><input type="number" name="km" require><br>
                <input type="submit" value="zwróć">

            </form>

        </section>
    </body>