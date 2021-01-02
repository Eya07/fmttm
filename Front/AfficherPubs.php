<?PHP
include "../Entities/Publication.php";
include "../Core/PublicationC.php";
include "../Core/UserC.php";

session_start();

$publicationC=new PublicationC();

$nbArticles=$publicationC->NbPubs();
// On calcule le nombre de pages total

if(isset($_GET['q']) AND !empty($_GET['q'])) {

$pubs=$publicationC->AfficherPub($_GET["q"]);
}else{
    $pubs=$publicationC->AfficherPub1();

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

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
                        <span>
                            <h5>Fly Me To The Moon</h5>
                        </span>

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
                                <a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a>
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
        <section class="section my-services" data-section="section3" style="width: 60%;">
        <form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
            <section class="blog-list grid-list">
                <center>
                
                    <div class="container">
                        <div class="row">
                            <?php foreach ($pubs as $pub) {?>

                            <div class="col-md-8 col-sm-12">
                                <div class="blog-wrapper">
                                    <div class="blog-item grid-item">
                                        <div class="row">
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="blog-image">
                                                    <img src="Images/<?php echo $pub['image'] ?>" alt="Image">
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12">
                                                <div class="blog-content">
                                                    <div class="blog-date">
                                                        <p><i class="fa fa-clock-o"></i> Posted On :
                                                            <?php echo $pub['created_at'] ?>
                                                        </p>
                                                    </div>

                                                    <h3><a href="NbVue.php?id_pub=<?php echo $pub['id_pub'] ;
                                                    
                                                    ?>">
                                                            <?php echo $pub['titre'] ?>
                                                        </a></h3>


                                                    <p>
                                                        <?php echo $pub['description'] ?>
                                                    </p>
                                                    <div class="blog-author">
                                                        <div class="pull-left">
                                                            <p><a href="#"><i class="fa fa-user-o"
                                                                        aria-hidden="true"></i>
                                                                    <?php  $userC=new UserC();
    $result=$userC->recupererUser($pub['id_user']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		


    }
    
    echo $nom ;
    echo " ";
    echo $prenom;?>
                                                                </a></p>
                                                        </div>
                                                        <div class="pull-right blog-date-icon">
                                                            <p><i class="fa fa-eye" aria-hidden="true"></i>
                                                                <?php echo $pub['nb_vue'] ?>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>

                        </div>

                    </div>
                

    </div>
    </center>

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
            $(".section").each(function () {
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

        $(".main-menu").on("click", "a", function (e) {
            e.preventDefault();
            showSection($(this).attr("href"), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
    </script>

</html>