<?PHP
include "../Core/LikeC.php";
include "../Entities/Like.php";
include "../Core/ProduitC.php";
include "../Entities/Produit.php";
session_start ();


$likeC=new LikeC();
$produitC=new ProduitC();

	$idProd=$_GET['id_produit'];

    $likeC->supprimerLike($idProd,6);
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
	$produitC->modifierProduitNblike1($produit,$idProd);
	
	header("Location: AfficherProduit.php");


?>