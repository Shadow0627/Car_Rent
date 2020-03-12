<?php session_start();
?>
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
                <?php 
                if(isset($_SESSION['u']))
                {
                    print('<li>' .$_SESSION["u"]. '</li>');
                    print('<li id="showa">Wyloguj</li>');
                }else
                {
                    print('<li id="showa">Zaloguj</li>');
                }
                if(isset($_SESSION['class']))
                {
                    if($_SESSION['class'] == "client")
                    {
                print('
                    <li id="showb">Auta</li>
                    ');
                }
                else
                {
                    print('<li id="showb">Zarządzanie</li>');
                }
                }
                else
                {
                    print('
                    <li id="showb">Auta</li>
                    ');
                }
                    ?>
                    <li id="showc">Kontakt</li>
                    <li id="showd">Lokalizacja</li>
                    <li id="showe">Rejestracja</li>
                </ul>
            </header>
            <section class="login" id="logon">
                <div class="login-div">
                    <?php
                    if(isset($_SESSION['u']))
                    {
                        print('<form action="php/logout.php" method="POST">
                        <input type="submit" value="WYLOGUJ">
                    </form>');
                    }
                    else
                    {
                        print('
                        <form action="php/login.php" method="POST">
                        <p>Login/Email/Telefon:</p>
                        <input type="text" name="login-name" required autocomplete="username">
                        <p>Hasło:</p>
                        <input type="password" name="passwd-login" required autocomplete="currect-password"><br>
                        <input type="submit" value="Zaloguj">
                    </form>
                        ');
                    }
                    
                    ?>
                </div>
            </section>
                <section class="cars" id="car">
                <?php
                if(isset($_SESSION['class'])){
                if($_SESSION['class'] == "client")
                {
                     include("php/car.php");
                }
                else
                {
                    print('
                        <a href="php/cms.php">Zarządzanie stroną</a>
                    ');
                }}
                else
                {include("php/car.php");}
                ?>    </section>
                <section class="contact" id="con">
                    <form action="php/con.php" method="POST">
                        <p>Twój email*:</p>
                        <input type="email" name="email-con" required autocomplete="email">
                        <p>Twoje imię*:</p>
                        <input type="text" name="name-con" required autocomplete="name">
                        <p>Twoja wiadomość*:</p>
                        <textarea name="text-con" required></textarea>
                        <input type="submit" value="Napizs do nas !">
                    </form>
                </section>
                <section class="loc" id="localization">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11322.271777707518!2d14.611652207748383!3d53.37521256142282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4700a7f3dcb94a27%3A0x25b388984b728d19!2sCentrum%20Edukacji%20Zdroje!5e0!3m2!1sen!2spl!4v1583844952253!5m2!1sen!2spl" width="100%" height="300vh" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </section>
                <section class="reg" id="register">
                    <form action="php/register.php" method="POST">
                        <P>Login*:</P>
                        <input type="text" name="login-reg" required autocomplete="username">
                        <p>Email*:</p>
                        <input type="email" name="email-reg" required autocomplete="email">
                        <p>Telefon*:</p>
                        <input type="text" name="phone-reg" required autocomplete="mobile">
                        <p>Hasło*:</p>
                        <input type="password" name="pass-reg" onchange="valid()" required id="reg-pass" autocomplete="new-password">
                        <p>Powtórz hasło*:</p>
                        <input type="password" name="pass-reg-again" required id="reg-pass-again"  autocomplete="new-password">
                        <input type="submit" value="zaloguj" name="add"  id="reg-button">
                    </form>
                </section>
            </section>
            
            <!-- <footer class="bottom-f">
                <h1>Strona napisana przez Piotr Porwit w ramach projektu szkolengo</h1>
            </footer> -->
        </main>
    </body>
    <script src="script/index.js"></script>
</html>