<?php


$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   $pdoStat=$conn->prepare('DELETE FROM fusee WHERE id=:num');

   $pdoStat->bindValue(':num',$_GET['numFusee'],PDO::PARAM_INT);

   $executeIsOk=$pdoStat->execute();

   header('Location: vdf.php');




?>
