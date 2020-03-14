<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "car_rent";
$conn = mysqli_connect($servername, $username, $password, $database);
$conn1 = new mysqli($servername, $username, $password, $database);
?>