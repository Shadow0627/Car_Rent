<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Car Rent</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="author" content="Piotr Porwit">
        <meta name="description" content="Stona do wynajmowania aut w szczecinie">
        <meta name="keywords" content="auto,rent,carrent,wyajmowanie aut,szczecin">
        <link rel="stylesheet" href="style/index.css">
        <link rel="shortcut icon" href="image/icon/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </head>
    <body>
        <main>
            <header class="top">
                <h1 class="top-h1">CAR RENT</h1>
                <ul class="top-nav">
                    <li id="showa">Zaloguj</li>
                    <li id="showb">Auta</li>
                    <li id="showc">Kontakt</li>
                    <li id="showd">Lokalizacja</li>
                    <li id="showe">Rejestracja</li>
                </ul>
            </header>
            <section class="login" id="logon">
                <div class="login-div">
                    <form action="php/login.php" method="POST">
                        <p>Login/Email/Telefon:</p>
                        <input type="text" name="login-name" required autocomplete="username">
                        <p>Hasło:</p>
                        <input type="password" name="passwd-login" required autocomplete="currect-password"><br>
                        <input type="submit" value="Zaloguj">
                    </form>
                </div>
                <section class="cars" id="car">
                    <?php include("php/car.php") ?>
                </section>
            </section>
            
            <footer class="bottom-f">
                <h1>Strona napisana przez Piotr Porwit w ramach projektu szkolengo</h1>
            </footer>
        </main>
    </body>
    <script src="script/index.js"></script>
</html>