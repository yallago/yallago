
<?php
$iddd=$_GET['id'];

include "cnxyallago.php";

$req2 = "DELETE FROM activities WHERE id ='$iddd'";

$mysqli->query($req2) or die ('Erreur '.$req2.' '.$mysqli->error());
header('Location: Liste-Activiés.php');


?>
