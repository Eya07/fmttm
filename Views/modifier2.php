<?php


$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   $pdoStat=$conn->prepare('UPDATE destination set destination=:destination , adresse=:adresse WHERE id=:num LIMIT 1');

   $pdoStat->bindValue(':num',$_POST['numDestination'],PDO::PARAM_INT);
   $pdoStat->bindValue(':destination',$_POST['destination'],PDO::PARAM_INT);
   $pdoStat->bindValue(':adresse',$_POST['adresse'],PDO::PARAM_STR);


   $executeIsOk=$pdoStat->execute();


if ($executeIsOk) {
header('Location:  vdf.php');
}



?>
