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
                           
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php
if(isset($_POST['c1'])){
    echo'
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
                <h3>Commande</h3>
                <form action="activite.php" method = "post">
                <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Prix : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" value = "35$" name = "" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Quantité : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" name = "com" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Numéro chambre: </label>
     </div>
     <div class="col-md-9">                
  <div class="select-option">
                        
                        <select id="guest">
                        <option value="">1 </option>
                            <option value="">2 </option>
                            <option value="">3 </option>
                            <option value="">4 </option>
                            <option value="">5 </option>
                            <option value="">6 </option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value = "valider" name = "val" />
                </form>
            </div>
          </div>
          </div>
          </div>';

}

else if(isset($_POST['c2'])){
    echo'
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
                <h3>Commande</h3>
                <form action="activite.php" method = "post">
                <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Prix : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" value = "30$" name = "" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Quantité : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" name = "com2" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Numéro chambre: </label>
     </div>
     <div class="col-md-9">                
  <div class="select-option">
                        
                        <select id="guest">
                        <option value="">1 </option>
                            <option value="">2 </option>
                            <option value="">3 </option>
                            <option value="">4 </option>
                            <option value="">5 </option>
                            <option value="">6 </option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value = "valider" name = "val" />
                </form>
            </div>
          </div>
          </div>
          </div>';

}

else if(isset($_POST['c3'])){
    echo'
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
                <h3>Commande</h3>
                <form action="activite.php" method = "post">
                <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Prix : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" value = "20$" name = "" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Quantité : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" name = "com3" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Numéro chambre: </label>
     </div>
     <div class="col-md-9">                
  <div class="select-option">
                        
                        <select id="guest">
                        <option value="">1 </option>
                            <option value="">2 </option>
                            <option value="">3 </option>
                            <option value="">4 </option>
                            <option value="">5 </option>
                            <option value="">6 </option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value = "valider" name = "val" />
                </form>
            </div>
          </div>
          </div>
          </div>';

}

else if(isset($_POST['c4'])){
    echo'
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
                <h3>Commande</h3>
                <form action="activite.php" method = "post">
                <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Prix : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" value = "25$" name = "" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Quantité : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" name = "com4" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Numéro chambre: </label>
     </div>
     <div class="col-md-9">                
  <div class="select-option">
                        
                        <select id="guest">
                        <option value="">1 </option>
                            <option value="">2 </option>
                            <option value="">3 </option>
                            <option value="">4 </option>
                            <option value="">5 </option>
                            <option value="">6 </option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value = "valider" name = "val" />
                </form>
            </div>
          </div>
          </div>
          </div>';

}

else if(isset($_POST['c5'])){
    echo'
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
                <h3>Commande</h3>
                <form action="activite.php" method = "post">
                <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Prix : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" value = "60$" name = "" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Quantité : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" name = "com5" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Numéro chambre: </label>
     </div>
     <div class="col-md-9">                
  <div class="select-option">
                        
                        <select id="guest">
                        <option value="">1 </option>
                            <option value="">2 </option>
                            <option value="">3 </option>
                            <option value="">4 </option>
                            <option value="">5 </option>
                            <option value="">6 </option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value = "valider" name = "val" />
                </form>
            </div>
          </div>
          </div>
          </div>';

}

else if(isset($_POST['c6'])){
    echo'
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="booking-form">
                <h3>Commande</h3>
                <form action="activite.php" method = "post">
                <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Prix : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" value = "40$" name = "" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Quantité : </label>
     </div>
     <div class="col-md-9">
     
          <input type="text" name = "com6" class = "form-control"/>
    </div>
  </div>
  <div class="row mt-3">
     <div class="col-md-3">
         <label for = "title">Numéro chambre: </label>
     </div>
     <div class="col-md-9">                
  <div class="select-option">
                        
                        <select id="guest">
                        <option value="">1 </option>
                            <option value="">2 </option>
                            <option value="">3 </option>
                            <option value="">4 </option>
                            <option value="">5 </option>
                            <option value="">6 </option>
                        </select>
                    </div>
                    </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value = "valider" name = "val" />
                </form>
            </div>
          </div>
          </div>
          </div>';

}
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
