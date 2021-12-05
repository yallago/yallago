<?php


$id=$_GET['id'];


$activity =$_POST['activity'];
$participants =$_POST['participants'];
$price =$_POST['price'];


include "cnxyallago.php";

$req1 = "UPDATE activities SET activity = '$activity',  participants= '$participants', price= '$price' WHERE id=$id ";



$mysqli->query($req1) or die ('Erreur '.$req1.' '.$mysqli->error());
header('Location: Liste-Activiés.php');


?>