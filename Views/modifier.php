<?php


$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

     $pdoStat=$conn->prepare('UPDATE vols set duree_vol=:duree_vol ,date_vol=:date_vol WHERE id=:num LIMIT 1');

   $pdoStat->bindValue(':num',$_POST['numVol'],PDO::PARAM_INT);
   $pdoStat->bindValue(':duree_vol',$_POST['duree_vol'],PDO::PARAM_INT);
$pdoStat->bindValue(':date_vol',$_POST['date_vol'],PDO::PARAM_STR);


   $executeIsOk=$pdoStat->execute();


if ($executeIsOk) {
header('Location:  vdf.php');
}



?>
