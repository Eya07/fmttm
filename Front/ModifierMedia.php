
<?PHP
include "../Entities/Media.php";
include "../Core/MediaC.php";


$media = null;
$MediaC=new MediaC();

if (isset($_GET["id_media"])) {
    $id      = $_GET["id_media"];
	$mediaS=$MediaC->recupererMedia($id);
	foreach($mediaS as $row){
		$id_media=$row['id_media'];
		$type=$row['type'];
		$quantite=$row['quantite'];
        $generique=$row['generique'];
        $prix=$row['prix'];
        $dimension=$row['dimension'];
        $date_dajout=$row['date_dajout'];

        $media=new Media($id_media,1,$type,$date_dajout,$quantite,$generique,$dimension,$prix,"");

    }
    if ($generique=="Noir Et Blanc")
    $test=true;
    else 
    $test=false;
    if ($generique=="Avec Couleur")
    $test1=true;
    else 
    $test1=false;
    if ($type=="2D")
    $test2=true;
    else 
    $test2=false;
    if ($type=="3D")
    $test3=true;
    else 
    $test3=false;

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
            <h2>Modifier Media</h2>
            <div class="line-dec"></div>
           
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="EditMedia.php" method="post">
                <div class="row">
                <input type="hidden" name="id_media" value="<?php echo $id_media ?>">

                <div class="col-md-3">
                      Type
                    </div>
     <div class="col-md-3">
                      <fieldset>
                      <?php  if($test3) {?> 
        <input type="checkbox" name="type" value="3D" checked>3D    
     <?php } else { ?>
        <input type="checkbox" name="type" value="3D">3D  
    <?php } ?>  
                      </fieldset>
                    </div>
                    <div class="col-md-3">
                      <fieldset>
                      <?php  if($test2) {?> 
     <input type="checkbox" name="type" value="2D" checked>2D
     <?php } else { ?>
    <input type="checkbox" name="type" value="2D" >2D
    <?php } ?>  
                      </fieldset>
                    </div>
                    
                    <div class="col-md-4">
                    Quantité
                  </div>
      <div class="col-md-4">
                    <fieldset>
                    <input class="form-control" type="number" name="quantite" required value="<?php echo $quantite ?>">                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    
                  </div>                  
                  <div class="col-md-3">
                      Générique
                    </div>
     
                    <div class="col-md-3">
                      <fieldset>
                      <?php  if($test1) {?> 
        <input type="checkbox" name="generique" value="Avec Couleur" checked>Avec Couleur    
     <?php } else { ?>
        <input type="checkbox" name="generique" value="Avec Couleur">Avec Couleur    
    <?php } ?>  
                      </fieldset>
                    </div>
                    <div class="col-md-3">
                      <fieldset>
                      <?php  if($test) {?> 
     <input type="checkbox" name="generique" value="Noir Et Blanc" checked>Noir Et Blanc
     <?php } else { ?>
    <input type="checkbox" name="generique" value="Noir Et Blanc" >Noir Et Blanc
    <?php } ?>  
                      </fieldset>
                    </div>
                    <div class="col-md-4">
                    Prix
                  </div>
                    <div class="col-md-4">
                    <fieldset>
                    <input class="form-control" type="number" name="prix" value="<?php echo $prix ?>">                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    
                  </div>          
                  <div class="col-md-4">
                    Dimension
                  </div>
                    <div class="col-md-4">
                    <fieldset>
                    <input class="form-control" type="number" name="dimension" required value="<?php echo $dimension ?>">                    </fieldset>
                  </div>
                  <div class="col-md-4">
                    
                  </div>          
                  <div class="col-md-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">
                        Modifier
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
