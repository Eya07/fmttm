
<?PHP
include "../Entities/Media.php";
include "../Core/MediaC.php";

if ( isset($_POST['type']) and isset($_POST['quantite']) and isset($_POST['generique'])  and isset($_POST['prix']) and isset($_POST['dimension']))
{
    
  
$media=new Media(1,6,$_POST['type'],"",$_POST['quantite'],$_POST['generique'],$_POST['dimension'],$_POST['prix'],"");
//Partie2

var_dump($media);
//Partie3
$mediaC=new MediaC();
$mediaC->ajouterMedia($media);
header("Location: Index.php");
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
                <li><a href="#section3">Espace client</a></li>
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

     <section class="section my-services" data-section="section3">
<br><br>
  <div class="row">

    

      <section class="section contact-me" data-section="section5">
        <div class="container">
          <div class="section-heading">
            <h2>Ajouter Media</h2>
            <div class="line-dec"></div>
           
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                <div class="row">
                <div class="col-md-3">
                      Type
                    </div>
     <div class="col-md-3">
                      <fieldset>
                       <input type="checkbox" name="type" value="3D">3D
                      </fieldset>
                    </div>
                    <div class="col-md-3">
                      <fieldset>
                      <input type="checkbox" name="type" value="2D">2D    

                      </fieldset>
                    </div>
                    
                    <div class="col-md-4">
                    Quantité
                  </div>
      <div class="col-md-4">
                    <fieldset>
                    <input class="form-control" type="number" name="quantite" required>
                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    
                  </div>                  
                  <div class="col-md-3">
                      Générique
                    </div>
     
                    <div class="col-md-3">
                      <fieldset>
                       <input type="checkbox" name="generique" value="Avec Couleur">Avec Couleur
                      </fieldset>
                    </div>
                    <div class="col-md-3">
                      <fieldset>
                      <input type="checkbox" name="generique" value="Noir Et Blanc">Noir Et Blanc    

                      </fieldset>
                    </div>
                    <div class="col-md-4">
                    Prix
                  </div>
                    <div class="col-md-4">
                    <fieldset>
                    <input class="form-control" type="number" name="prix" required>
                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    
                  </div>          
                  <div class="col-md-4">
                    Dimension
                  </div>
                    <div class="col-md-4">
                    <fieldset>
                    <input class="form-control" type="number" name="dimension" required>
                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    
                  </div>          
                  <div class="col-md-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">
                        Ajouter
                      </button>
                    </fieldset>
                  </div>
     </div>
     </form>
              </div>
            </div>
          </div>
        </div>
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
