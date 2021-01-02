<?PHP
include "../Entities/User.php";
include "../Core/UserC.php";
//include "config.php";

if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['confirm_password']))
{


    
$exist = false;
$userC=new UserC();
$listeUsers = $userC->afficherUsers();
    
foreach($listeUsers as $row)
{
    if( $row['email']==$_POST['email'])
    {
        $exist = true;
    }
}
    
$user=new User(1,$_POST['nom'],$_POST['prenom'],$_POST['email'],sha1($_POST['password']),sha1($_POST['confirm_password']),"");

if(!$exist)
{

$userC->ajouterUser($user);
header('Location: ../front/index.php');
}
else{
    echo "email existe déjà";
}
}else{
	echo "vérifier les champs";
}
//*/

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
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/logo-2.png" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>F.M.T.T.M</h4>
              <span><h5>Fly Me To The Moon</h5></span>

              <span>Agence de voyage spatial</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Connexion</a></li>
                <li><a href="#section2">A propos de nous</a></li>
                <li><a href="index.php">Espace client</a></li>
                <li><a href="#section4">My Work</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://fb.com/templatemo"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>by ahmed / mimi</p>
            </div>
          </div>
        </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <div class="titre">Fly me to the moon</div>

            <div class="line-dec"></div>


          </div>
          <div class="titre2" ><a href="connexion.html" style="color:white "> Connexion </a></div>


        </div>
      </section>
      <section class="section about-me" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h1 class="textEnGros">Fly Me To The Moon</h1>
                <div class="line-dec"></div>

                <br><br><br>

                <h1 class="connexion" > Inscription :</h1>
                <form method="POST" action="">

                <table class="connexion">
                    <tr>
                        <td>nom :</td>
                        <td><input type="text" maxlength="20" required name="nom" placeholder="nom" ></td>   </tr>
                    </tr><tr>
                    <td>prenom :</td>
                    <td><input type="text" maxlength="20" required name="prenom" placeholder="prenom" ></td>   </tr>
                    </tr>

                    <tr>
                        <td>E-mail :</td>
                        <td><input type="email" maxlength="60" required name="email" placeholder="E-mail" ></td>   </tr>
                    </tr>
                    <td>Mot de passe :</td>
                    <td><input type="password" maxlength="20" required name="password" placeholder="Mot de passe"> </td></tr>
                    <tr>
                    </tr>
                    <td>confirm mdp :</td>
                    <td><input type="password" maxlength="20" required name="confirm_password" placeholder="Mot de passe"> </td></tr>


                </table>

                <input class="decoreco2" type="submit" value="s'inscrire" style="background-color: #8c363e">
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
