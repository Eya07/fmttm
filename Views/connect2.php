<?php

	$destination = $_POST["destination"];
	$adresse = $_POST["adresse"];




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "INSERT INTO destination (destination, adresse)
	    VALUES ('$destination', '$adresse')";


	    $conn->exec($sql);

        header('Location: fusée.php');
         Exit();


		}


	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>
