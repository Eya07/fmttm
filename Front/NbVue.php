<?PHP
include "../Entities/Publication.php";
include "../Core/PublicationC.php";
include "../Core/UserC.php";
include "../Core/CommentaireC.php";


session_start();

    
  

$publicationC=new PublicationC();
$pub1=$publicationC->RecupererPub($_GET["id_pub"]);
foreach($pub1 as $row){
   
    $nb_vue1=$row['nb_vue'];

   
    $publicationC->modifierNbVues($nb_vue1,$_GET["id_pub"]);


}
$id=$_GET["id_pub"];
header("Location: DetailsPub.php?id_pub=$id");





?>