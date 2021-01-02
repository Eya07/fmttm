<?php 
include "../Core/UserC.php";
    
if ( isset($_POST['email']) and isset($_POST['password']) )
{

$userC=new UserC();
$u=$userC->Logedin($_POST['email'],sha1($_POST['password']));
    
$vide=false;
if (!empty($_POST['email']) || !empty($_POST['password'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['email']==$_POST['email'] && $t['password']==sha1($_POST['password'])){
		
    session_start();
    $_SESSION['i']=$t['id_user'];

		$_SESSION['l']=$_POST['email'];
		$_SESSION['p']=$_POST['password'];
    $_SESSION['r']=$t['role'];
    $_SESSION['n']=$t['nom'];
		$_SESSION['p']=$t['prenom'];

        /**/echo '<body onLoad="alert(\'Bonjour \')">';
         echo '<meta http-equiv="refresh" content="0;URL=../front/index.php">'; 
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=../front/index.php">'; 
      } 
}
    
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.html">Retour au formulaire</a>	 <?php 
}
}   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Fly me to the moon</title>
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />

  </head>


 
 
     <body>
     <div id="page-wraper">
      <!-- Sidebar Menu -->
     

      <section class="section about-me" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h1 class="textEnGros">Fly Me To The Moon</h1>
                <div class="line-dec"></div>

                <br><br><br>

                <h1 class="connexion"> Connexion :</h1>
                <form method="POST" action="">

              <table class="connexion">
                  <tr>
                      <td>E-mail :</td>
                      <td><input type="text" maxlength="60" required name="email" placeholder="E-mail" ></td>   </tr>
                  </tr>
                      <td>Mot de passe :</td>
                       <td><input type="password" maxlength="60" required name="password" placeholder="Mot de passe"> </td></tr>

              </table>

                <input class="decoreco2" type="submit" value=" se connecter" style="background-color:#8c363e">
                <input class="decoreco2" type="reset" value="annuler" style="background-color: #8c363e" >
                </form>
    </section>
         </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">

	function deleteMedia(confirmation, url){
		if(confirmation){
			window.location.href = url;
		}
	}

</script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
 
</html>
