<?PHP
include "../Core/CombinaisonC.php";
include "../Entities/Combinaison.php";

$CombinaisonC=new CombinaisonC();

	

	$CombinaisonC->supprimerCombinaison($_GET['id_combinaison']);
	
	header("Location: AfficherCombi.php");


?>