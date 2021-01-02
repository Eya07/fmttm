<?PHP
include "../Core/MediaC.php";
include "../Entities/Media.php";

$mediaC=new MediaC();

	

	$mediaC->supprimerMedia($_GET['id_media']);
	
	header("Location: afficherMedias.php");


?>