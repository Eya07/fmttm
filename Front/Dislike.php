<?PHP
include "../Core/LikeC.php";
include "../Entities/Like.php";
include "../Core/ProduitC.php";
include "../Entities/Produit.php";
include "../Core/DislikeC.php";
include "../Entities/Dislike.php";

$dislikeC=new DislikeC();

$produitC=new ProduitC();

	$dislike=new Dislike(1,$_GET["id_produit"],6);
	$idProd=$_GET['id_produit'];

	$dislikeC->Dislike($dislike);
    $likeC=new LikeC();
    $test2=$likeC->verifierLike($idProd,6);

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
		if($test2){
			$likeC->supprimerLike($idProd,6);
			$produitC->modifierProduitNblike1($produit,$idProd);
		}
		$produitC->modifierProduitNbdislike($produit,$idProd);
		
	header("Location: AfficherProduit.php");


?>