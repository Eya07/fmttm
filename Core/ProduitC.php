<?PHP
require_once "../config.php";
class ProduitC {
   
    function afficherProduit(){
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }	
    
  
    
   
	function ajouterProduit($produit){
		$sql="insert into produit (nom,photo,date_dajout,quantite,prix,nblike,nbdislike) values (:nom,:photo,:date_dajout,:quantite,:prix,0,0)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $date_dajout=date("Y-m-d");
        $quantite=$produit->getQuantite();
        $photo=$produit->getPhoto();
        $prix=$produit->getPrix();
        $nom=$produit->getNom();

		$req->bindValue(':photo',$photo);
		$req->bindValue(':date_dajout',$date_dajout);
		$req->bindValue(':quantite',$quantite);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);


        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function recupererProduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function modifierProduitNblike($produit,$id){
		$sql="UPDATE produit SET  nblike=:nb_like WHERE id_produit=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    $nb_like=$produit->getNb_like()+1;
    
		
        $req->bindValue(':nb_like',$nb_like,PDO::PARAM_INT);


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
	
    }
    function modifierProduitNblike1($produit,$id){
		$sql="UPDATE produit SET  nblike=:nb_like WHERE id_produit=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    $nb_like=$produit->getNb_like()-1;
    
		
        $req->bindValue(':nb_like',$nb_like,PDO::PARAM_INT);


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
	
    }
    function modifierProduitNbdislike($produit,$id){
		$sql="UPDATE produit SET  nbdislike=:nb_dislike WHERE id_produit=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    $nb_dislike=$produit->getNb_dislike()+1;
    
		
        $req->bindValue(':nb_dislike',$nb_dislike,PDO::PARAM_INT);


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
	
    }
    function modifierProduitNbdislike1($produit,$id){
		$sql="UPDATE produit SET  nbdislike=:nb_dislike WHERE id_produit=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    $nb_dislike=$produit->getNb_dislike()-1;
    
		
        $req->bindValue(':nb_dislike',$nb_dislike,PDO::PARAM_INT);


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
	
    }
    
     
    
}

?>