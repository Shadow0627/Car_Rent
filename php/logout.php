<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['class']);
unset($_SESSION['u']);
// unset($_SESSION['']);
// unset($_SESSION['']);
// unset($_SESSION['']);
header('Location: ../index.php');
session_destroy()
?>