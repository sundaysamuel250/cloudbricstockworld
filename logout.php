<?php 

session_start();
$session["loggedin"] = "";
session_destroy();
session_unset();


header("Location: login.php");