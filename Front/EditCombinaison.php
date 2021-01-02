

<?PHP
include "../Entities/Combinaison.php";
include "../Core/CombinaisonC.php";

  


     
      
if (  isset($_POST['quantite']) and isset($_POST['image'])   and isset($_POST['dimension']))
{
    
  $prix=$_POST['quantite']*15;
    $comb=new Combinaison($_POST['id_combinaison'],6,$_POST['image'],"",$_POST['quantite'],$_POST['dimension'],$prix,"");
    //Partie2

var_dump($comb);
//Partie3
$combinaisonC=new CombinaisonC();

$combinaisonC->modifierCombinaison($comb,$_POST['id_combinaison']);
header("Location: afficherCombi.php");

}

    





?>