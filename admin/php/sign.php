<?php

include('clSystem.php');

$objSign = new pSystem();
$objSign->usr = $_POST['usr'];
$objSign->psswrd = MD5($_POST['passwd']);
$objSign->signin();
?>