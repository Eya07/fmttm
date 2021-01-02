<?PHP
include "../Core/DislikeC.php";
include "../Entities/Dislike.php";
include "../Core/ProduitC.php";
include "../Entities/Produit.php";


$dislikeC=new DislikeC();
$produitC=new ProduitC();

	$idProd=$_GET['id_produit'];

    $dislikeC->supprimerDislike($idProd,6);
    $produitS=$produitC->recupererProduit($_GET['id_produit']);
	foreach($produitS as $row){
		$id_produit=$row['id_produit'];
		$name=$row['nom'];
		$date=$row['date_dajout'];
        $image=$row['photo'];
        $prix=$row['prix'];
        $quantite=$row['quantite'];
		
		$nb_like=$row['nblike'];
		$nb_dislike=$row['nbdislike'];
		
		
    }
	$produit=new Produit($id_produit,$name,$image,$date,$quantite,$prix,$nb_like,$nb_dislike);
	$produitC->modifierProduitNbdislike1($produit,$idProd);
	
	header("Location: AfficherProduit.php");


?>