<?php

	$duree_vol = $_POST["duree_vol"];
	$date_vol = $_POST["date_vol"];




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "INSERT INTO vols (duree_vol, date_vol)
	    VALUES ('$duree_vol', '$date_vol')";
	    // use exec() because no results are returned
	    $conn->exec($sql);

        header('Location: destination.php');

         Exit();


	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>
