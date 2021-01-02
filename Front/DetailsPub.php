
<?PHP
include "../Entities/Publication.php";
include "../Core/PublicationC.php";
include "../Core/UserC.php";
include "../Core/CommentaireC.php";


session_start();

    
  

$publicationC=new PublicationC();

$pub=$publicationC->RecupererPub($_GET["id_pub"]);
foreach($pub as $row){
    $id_pub=$row['id_pub'];
    $titre=$row['titre'];
    $date=$row['created_at'];
    $image=$row['image'];
    $description=$row['description'];
    $nb_vue=$row['nb_vue'];
    $id_user=$row['id_user'];

   


}

$ComC=new CommentaireC();

$coms=$ComC->AfficherCom($_GET["id_pub"]);




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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="assets/style.css" rel="stylesheet" type="text/css">


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
      

         
<br><br>
<section class="section my-services" data-section="section3" style="width: 50%;">

      <section class="item-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="item-wrapper">
                    <div class="cover-content">
                        
                        <h2><?php echo $titre?></h2>
                        <div class="author-detail">
                            <span><a href="#"><i class="fa fa-clock-o"></i> Posted On : <?php echo $date?></a></span>
                            <span class="blog-date-icon">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $nb_vue?></a>
                                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 5</a>
                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <?php $nbr=$ComC->NombreCom($_GET['id_pub']);
                                echo $nbr;
                                ?></a>
                            </span>
                        </div>
                    </div>
                    <div class="cover-image">
                        <img src="images/<?php echo $image?>" alt="Image">
                    </div>
                    <div class="item-detail">
                        <p class="articlepara">Description: <?php echo $description?>.</p>
                        
                        
                    </div>
                   
                    <div class="author-profile">
                        <div class="profile-image">
                            <img src="images/profile1.jpg" alt="Image">
                        </div>
                        <div class="profile-content">
                            <h3> <?php  $userC=new UserC();
    $result=$userC->recupererUser($id_user);
	foreach($result as $row1){
		$nom=$row1['nom'];
		$prenom=$row1['prenom'];
		


    }
    
    echo $nom ;
    echo " ";
    echo $prenom;?></h3>
                            <ul class="profile-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="comment-form">
    <form method='post' action="ajouterCommentaire.php">
        <h3>Add a comment</h3>
        <input type="hidden" name="id_pub" value="<?php echo $id_pub ?>">

        <div class="row">
            <div class="form-group col-sm-12">
                <label for="Name">Your Comment:</label>
                <input type="text" name="description" placeholder="Commentaire"></input>
            </div>
          
            <div class="col-sm-12">
                <div class="comment-btn">
                    <input type="submit" class="btn-blue btn-red">Submit Comment</input>
                </div>
            </div>
        </div>
    </form>
</div>

    <div class="comment-box">
    <h3>Comments</h3>
    <ul class="comment-list">
    <?php foreach ($coms as $com) {?>

        <li>
            <div class="comment-item">
                <div class="comment-image">
                    <img src="images/author.jpg" alt="Image">
                </div>
                <div class="comment-content">
                    <h4><?php  $userC=new UserC();
    $result=$userC->recupererUser($com['id_user']);
	foreach($result as $row1){
		$nom=$row1['nom'];
		$prenom=$row1['prenom'];
		


    }
    
    echo $nom ;
    echo " ";
    echo $prenom;?></h4>
                    <p class="date"><i class="fa fa-clock-o"></i> <?php echo $com['created_at'] ?></p>
                    <p><?php echo $com['description'] ?></p>
                   
                </div>
            </div>
           
        </li>
        <?php } ?>

    </ul>
</div>



</section>
</section>


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
