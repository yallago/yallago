<?php
include  "cnxyallago.php";


$activity =$_POST['activity'];
$participants =$_POST['participants'];
$price =$_POST['price'];



$requete = "INSERT INTO activities (activity,participants,price) VALUES ('$activity','$participants','$price')";

$rslt = $mysqli->query($requete) or die ($mysqli->error());

header('Location: Ajouter-Activité.php');
 

?>
