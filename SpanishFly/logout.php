<?php
session_start();
unset($_SESSION['user']);	//Destroy session
header("Location: index.html");	//Brings user back to home page
?>