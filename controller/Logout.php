<?php
session_start();
if(session_destroy()) // Destroying All Sessions
header("Location: ../controller/login.php"); // Redirecting To Home Page
?>