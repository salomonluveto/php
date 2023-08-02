<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+243) 815995094</li>
                            <li><i class="fa fa-envelope"></i> salomonluveto2023@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            
                            
                            <div class="language-option">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <?php
                            if(isset($_SESSION['email'])){
                                echo $_SESSION['email'];
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="index.php">Accueil</a></li>
                                    <li><a href="actualite.php">Actuailtés</a></li>
                                    <li><a href="activite.php">Activité</a></li>
                                    <li><a href="reservation.php">Reservation</a>
                                        
                                    </li>
                                    <li><a href="galerie.php">Galerie</a></li>
                                   
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
     <!-- Rooms Section Begin -->
     <h3 style = "text-align:center;"> chambres disponibles </h3><br/><br/>
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
    <?php 
      $db = new PDO("mysql:host=localhost;dbname=hotel","root","");
      $req = "SELECT * FROM chambre_nonres";
      $a = $db->query($req);
      $ligne = $a->fetchAll();
      foreach($ligne as $data){
   echo'
                <div class="col-lg-4 col-md-6">
                    <div class="room-item"> ';

     echo"<img src= ".$data['photos'].">";
                     echo'   <div class="ri-text">';
                        echo "    <h4>".$data['nom_chambre']."</h4>
                            <h3>".$data['prix']."$<span>/nuit</span></h3>
                             
                          <br/><form action = 'reservation2.php' method = 'post'>
                          <input type ='submit' class = 'btn btn-primary' name =".$data['name']." value = 'Reservé'/>
                          </form>  
                        </div>
                    </div>
                </div> 
                ";
                       
      }
      ?>
     </div>
        </div>
    </section>
    <!-- Rooms Section End -->
    <?php 
     $db = new PDO("mysql:host=localhost;dbname=hotel","root","");
     $req = "SELECT * FROM chambre_reserve";
     $a = $db->query($req);
     if($a->rowcount()>0){
         echo '<h3 style = "text-align:center;"> chambres Occupées </h3><br/><br/>
         <section class="rooms-section spad">
             <div class="container">
                 <div class="row">';
     }
     $ligne = $a->fetchAll();
     foreach($ligne as $data){
  echo'
               <div class="col-lg-4 col-md-6">
                   <div class="room-item"> ';

    echo"<img src= ".$data['photos'].">";
                    echo'   <div class="ri-text">';
                       echo "    <h4>".$data['nom']."</h4>
                           <h3>".$data['prix']."$<span>/nuit</span></h3>";
                        echo " Reservé par: <h6>".$data['email']."</h3>
                            
                         
                       </div>
                   </div>
               </div> 
              
               ";
     }
    echo' </div>
     </div>
     <a href = "form.php"><button class = "btn btn-primary"> Se deconnecter</button></a>
 </section';
    ?>



    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                
                            </div>
                            <p>Service d'assistance pour les visites touristiques ou l'achat de billets<br />Réception ouverte 24h/24</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contactez - Nous</h6>
                            <ul>
                                <li>(+243) 815995094</li>
                                <li>salomonluveto2023@gmail.com</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>Message</h6>
                            
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>