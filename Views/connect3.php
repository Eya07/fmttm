<?php

	$type = $_POST["type"];
	$voyageur = $_POST["voyageur"];




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "INSERT INTO fusee (type_fusee, nombre_voyageur)
	    VALUES ('$type', '$voyageur')";
	    // use exec() because no results are returned
	    $conn->exec($sql);

        header('Location: vdf.php');

         Exit();


	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>
