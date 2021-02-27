
<?php
require_once "includes/header.php";

?>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight" style="margin:22px;">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <button class="btn btn-primary btn-lg"><a href="blog.php">Read More</a></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Second slide -->
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded volleyball compitition.</p>
                              <button class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Third slide -->
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded volleyball compitition.</p>
                              <button class="btn btn-primary btn-lg">Button</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!-- /.carousel -->
            <div class="news">
               <div class="container">
                  <div class="heading-slider">
                     <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                     <!--made by vipul mirajkar thevipulm.appspot.com-->
                     <h1>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "this site is under constraction, developer has full right to remove from preview incase of mentainace"]'>
                     <span class="wrap"></span>
                     </a>
                     </h1>	   
                     <span class="wrap"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="matchs-info">
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="matchs-vs">
                     <div class="vs-team">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                              <?php 
                                 $query = "SELECT * FROM `match` WHERE match_status='upcoming' ";
                                 $result = mysqli_query($connect,$query);
                                 $row = mysqli_fetch_array($result);
                                    $team_1 =$row['team_1'];
                                    $team_2 =$row['team_2'];
         
                                 ?>
                                 <img src="images/ecs1.jpg" width="240" height="150" alt="">
                                 <span><?php echo $team_1; ?></span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="images/civil.jpg" width="240" height="150" alt="">
                                 <span><?php echo $team_2; ?></span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="right-match-time">
                     <h2>Next Match</h2>
                     <ul id="countdown-1" class="countdown">
                        <li><span class="days">3 </span>Day </li>
                        <li><span class="hours">5 </span>Hours </li>
                        <li><span class="minutes">25 </span>Minutes </li>
                        <li><span class="seconds">10 </span>Seconds </li>
                     </ul>
                     <span>22/02/2021 /4:00pm</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
                  <aside id="sidebar" class="left-bar">
                     <div class="banner-sidebar">
                        <img class="img-responsive" src="images/volley11.jpg" alt="#" />
                        <h3>Ethiopian Volleyball contest 2021</h3>
                     </div>
                  </aside>
                  <h4>Match Fixture</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                        <?php 
                           $query = "SELECT * FROM `match` WHERE match_status='upcoming' ";
                           $result = mysqli_query($connect,$query);
                           while($row = mysqli_fetch_assoc($result)){
                              $match_id = $row['match_id'];
                               $team_1 = $row['team_1'];
                               $team_2 = $row['team_2'];
                              ?>
                           
                           <a href="match_one.php?match_id=<?php echo $match_id; ?>">
                              <ul class="match_one">
                                 <li>
                                    <img src="images/ecs1.jpg" width="80" alt="">
                                    <span><?php echo $team_1; ?></span>
                                 </li>
                                 <li class="vs"><span>vs</span></li>
                                 <li>
                                    <img src="images/ecs1.jpg" width="80" alt="">
                                    <span><?php echo $team_2; ?></span>
                                 </li>
                              </ul>
                           </a>     
                      <?php } ?>
                        </div>
                     </div>
                  </aside>
                  <h4>Points Table</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <table class="table table-bordered table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Team</th>
                                 <th>P</th>
                                 <th>W</th>
                                 <th>L</th>
                                 <th>pt</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php 
                           $counter = 1;
                           $query = "SELECT * FROM `results` order by point";
                           $result = mysqli_query($connect,$query);
                           while($row = mysqli_fetch_assoc($result)){?>
                              <tr>
                                 <td><?php echo $counter;?></td>
                                 <td><img src="images/<?php echo $row['team_image']; ?>" width="40" alt=""><?php echo $row['team_name']; ?></td>
                                 <td><?php echo $row['played']; ?></td>
                                 <td><?php echo $row['win']; ?></td>
                                 <td><?php echo $row['loss']; ?></td>
                                 <td><?php echo $row['point']; ?></td>
                              </tr>
                              <?php $counter=$counter+1; }?> 
                           </tbody>
                        </table>
                     </div>
                  </aside>
                  <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                     <div class="top-stroy-header">
                        <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                        <span class="date">February 25, 2021</span>
                        <h2>Other Headlines</h2>
                     </div>
                     <ul class="other-stroies">
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                        <li><a href="#">Ethipian Basket Ball contest 2020</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-8 col-sm-8 col-xs-12">
                  <div class="news-post-holder">
                     <div class="news-post-widget">
                        <img class="img-responsive" src="images/volley1.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date">20 january 2021</span>
                           <h2><a href="blog-detail.html">Ethiopian Students First leg volleyball compition.</a></h2>
                           <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                     </div>
                     <div class="news-post-widget">
                        <img class="img-responsive" src="images/valley5.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date">20 February 2021</span>
                           <h2><a href="blog-detail.html">Ethiopian Students First leg volleyball compition.</a></h2>
                           <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                     </div>
                  </div>
                  <div class="news-post-holder">
                     <div class="news-post-widget">
                        <img class="img-responsive" src="images/ball1.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date">20 December 2020</span>
                           <h2><a href="blog-detail.html">Ethiopian Students First leg volleyball compition.</a></h2>
                           <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main-heading sytle-2">
                        <h2>Video</h2>
                        <p>check out our latest volleyball training video<br>visit our site for daily update</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="video_section_main theme-padding middle-bg vedio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="match_vedio">
                     <iframe  width="516" height="315" src="https://www.youtube.com/embed/Z-Sy0GoqlQM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2>Meet Your Team</h2>
                  <p>meet list of our best player<br>contact detail will be provided soon after permission</p>
               </div>
            </div>
            <div id="team-slider">
               <div class="container">
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-3.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Spiker</div>
                           <h5>Tinsae G/Silassie</h5>
                           <span class="player-number">10</span>
                        </div>
                        <div class="overlay">
                           <div class="team-detail-hover position-center-x">
                              <p>Lacus vulputate torquent mollis venenatis quisque suspendisse fermentum primis,</p>
                              <ul class="social-icons style-4 style-5">
                                 <li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
                                 <li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
                                 <li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
                                 <li><a class="pinterest" href="#" tabindex="0"><i class="fa fa-pinterest-p"></i></a></li>
                              </ul>
                              <a class="btn blue-btn" href=" /soccer/team-detail.html" tabindex="0">View Detail</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-4.jpg"  alt="">
                        <div class="player-name">
                           <div class="desination-2">Outside Hitter</div>
                           <h5>Yonatan Paulo</h5>
                           <span class="player-number">3</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-3.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Libro</div>
                           <h5>Mohammed Abdella</h5>
                           <span class="player-number">5</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="images/img-1-4.jpg" alt="">
                        <div class="player-name">
                           <div class="desination-2">Spiker</div>
                           <h5>Galchu Jarso</h5>
                           <span class="player-number">9</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
 <?php require_once "includes/footer.php";?>
     