<?PHP
include "../Entities/Combinaison.php";
include "../Core/CombinaisonC.php";


$CombinaisonC=new CombinaisonC();



    $combs=$CombinaisonC->afficherCombinaisonParUser(6);






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
        <a href="ajouterCombinaison.php" style="color:#000000" >Ajouter Combinaison</a>

        <table id="datatable" class="table table-striped table-bordered table-dark"  style="width:100%">
                      <thead>
                        <tr>
									<th>image</th>
									<th>date d'ajout </th>
									<th> dimension</th>
									<th>Prix</th>
									<th>Quantite</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach ($combs as $comb) {?>
								<tr>
									<td><img class="rounded-circle" style="width: 50px"
                                            src="Images/<?php echo $comb["photo"] ?>"/></td>
									<td><?php echo $comb["date_dajout"] ?></td>
									<td><?php echo $comb["dimension"] ?></td>
									<td><?php echo $comb["prix"] ?></td>
                                    <td><?php echo $comb["quantite"] ?></td>

									<td>
									<a href="ModifierCombi.php?id_combinaison=<?php echo $comb["id_combinaison"] ?>" class="btn btn-success btn-sm">Edit</a>
										<a href="javascript:deleteCombi(confirm('Etes vous sur ?'),'supprimerCombi.php?id_combinaison=<?php echo $comb["id_combinaison"] ?>');" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
								<?php }?>
                      </tbody>
                    </table>
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
 <script type="text/javascript">

function deleteCombi(confirmation, url){
    if(confirmation){
        window.location.href = url;
    }
}

</script>
</html>