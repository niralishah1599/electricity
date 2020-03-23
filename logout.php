<?php
session_start();

session_destroy();
$c="login";
header("Location:homepage.php");
?>