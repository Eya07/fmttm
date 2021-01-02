<?PHP
include "../Entities/Commentaire.php";
include "../Core/CommentaireC.php";
session_start();

// If upload button is clicked ... 

if ( isset($_POST['description']) )
{
    
  
$com=new Commentaire(1,$_POST['description'],$_POST['id_pub'],$_SESSION['i']);
//Partie2
$id=$_POST['id_pub'];
var_dump($com);
//Partie3
$comC=new CommentaireC();
$comC->AjouterCom($com);
header("Location: DetailsPub.php?id_pub=$id");
}

?>