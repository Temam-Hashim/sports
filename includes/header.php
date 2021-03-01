<?php 
   ob_start();
   session_start();
   require_once "db.php"; 
   require_once 'function.php';


?>


<?php
//INSERT INTO gallery(g_image,g_desc)VALUES('g10.jfif','Ethiopian Student valleyball match comptition. match played between ECS vs CE&ETC on 27 FEB 2021')
//  
   // $query  = "UPDATE gallery set g_date='2021-02-27'";
   // $result = mysqli_query($connect,$query);
   // if($result){
   //    echo "date updated";
   // }
   // else{
   //    mysqli_error($connect);
   // }

?>
<!-- <div class="text-info bg-dark"><marquee>All This week match has postponeded</marquee></div> -->

<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>SPORTS</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>

<!-- gallery header -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />




   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.html"><img src="images/ecs1.jpg"  width="50px" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="https://www.facebook.com/temam.hashim.750"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="https://twitter.com/hashim_temam"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="https://www.youtube.com/channel/UCJiDED5twU0LM4OPXiHRiiA"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="instagram" href="https://www.instagram.com/temamhashim/"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                 <a href="login.php" class="login"><i class="fa fa-user"></i>Login</a>
                              </li>
                              <li>
                                 <div class="cart-option">
                                    <a href="register.php"><i class="fa fa-shopping-cart"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="index.php">Home</a></li> 
                                          <li><a href="team.php">Team</a></li>
                                          <li><a href="match.php">Match</a></li>
                                          <li><a href="table.php">Table</a></li>
                                          <li><a href="contact.php">contact</a></li>
                                          <!-- drop down -->
                  
                                           <li class="nav-item dropdown">
                                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                More
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="news.php">News</a>
                                                <a class="dropdown-item" href="gallery.php">Gallery</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="about.php">About</a>
                                             </div>
                                          </li> 
                                          <!-- <li class="dropdown mega-dropdown">
                                             <a href="match.php" class="dropdown-toggle text-primary" data-toggle="dropdown" >More<span class="caret"></span></a>				
                                             <ul class="dropdown-menu mega-dropdown-menu">
                                      
                                                
                                                <li class="col-sm-4">
                                                
                                                   <ul class="menu-inner">
     
                                                      <li class="match_one"><a  href="index.php">News</a></li>
                                                      <li class="match_one"><a  href="gallery.php">Gallery</a></li>
                                                      <li class="match_one"><a  href="about.php">About</a></li>
                                            
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li> -->
    
                                          <li><a href="login.php">Login</a></li>
                                          <li><a href="register.php">Register</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                       <div class="input-group stylish-input-group">
                                          <input type="text" class="form-control"  placeholder="Search" >
                                          <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>