<?php require_once "includes/header.php"; ?>

<div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
                                <!-- match slider start -->

                                <li class="dropdown mega-dropdown">
                                             <a href="match.php" class="dropdown-toggle" data-toggle="dropdown">Match<span class="caret"></span></a>				
                                             <ul class="dropdown-menu mega-dropdown-menu">
                                                <li class="col-sm-8">
                                                   <ul>
                                                      <li class="dropdown-header">Team preview</li>
                                                      <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                         <div class="carousel-inner">
                                                            <div class="item active">
                                                               <div class="banner-for-match"><a href="#"><img class="img-responsive" src="images/ecs1.jpg" width="400" alt="ECS" />ELECTRONICS & COMPUTER ENGINEERING</a> </div>
                                                               
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class="item">
                                                               <div class="banner-for-match"><a href="#"><img class="img-responsive" src="images/civil.jpg" width="400" alt="CIVIL" /> CIVIL AND ETC</a></div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class="item">
                                                               <div class="banner-for-match"><a href="#"><img class="img-responsive" src="images/cse1.jpeg" width="400" alt="CSE" /> CSE and ME</a></div>
                                                            </div>
                                                             <!-- End Item -->
                                                             <div class="item">
                                                               <div class="banner-for-match"><a href="#"><img class="img-responsive" src="images/eee1.jpg" width="400" alt="EE" /> ELECTRONICE(EEE)</a></div>
                                                            </div>
                                                            <!-- End Item -->                                
                                                         </div>
                                                         <!-- End Carousel Inner -->
                                                         <!-- Controls -->
                                                         <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                         <span class="sr-only">Previous</span>
                                                         </a>
                                                         <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                         <span class="sr-only">Next</span>
                                                         </a>
                                                      </div>
                                                      <!-- /.carousel -->
                                                   </ul>
                                                </li>
                                                <li class="col-sm-4">
                                                
                                                   <ul class="menu-inner">
                                                      <li class="dropdown-header text-primary">Next Matchs</li>
                                                      <?php 
                                                         $query = "SELECT * FROM `match` WHERE match_status='upcoming' ";
                                                         $result = mysqli_query($connect,$query);
                                                         while($row = mysqli_fetch_assoc($result)){
                                                            $team_1 =$row['team_1'];
                                                            $team_2 =$row['team_2'];
                                                            $match_date = $row['match_date'];
                                                            $match_status = $row['match_status'];
                                               
                                                      
                                                      ?>
                                                      <li><a href="match.php"><?php echo $team_1." vs ".$team_2;?></a></li>
                                                   <?Php           } ?>  
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                  <!-- match slider end -->
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Table</li>
               </ul>
            </div>
         </div>
      </section>

<!-- match -->
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
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
                           $query = "SELECT * FROM `results` order by `point` desc";
                           $result = mysqli_query($connect,$query);
                           while($row = mysqli_fetch_assoc($result)){?>
                              <tr>
                                 <td><?php echo $counter; ?></td>
                                 <td><img src="images/<?php echo $row['team_image']; ?>" width="40" alt=""><?php echo $row['team_name']; ?></td>
                                 <td><?php echo $row['played']; ?></td>
                                 <td><?php echo $row['win']; ?></td>
                                 <td><?php echo $row['loss']; ?></td>
                                 <td><?php echo $row['point']; ?></td>
                              </tr>
                              <?php $counter = $counter+1; }?> 
                           </tbody>
                        </table>
                     </div>
                  </aside>
          </div>
                            <!-- promotion -->

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

                  <!-- promotion end -->
        </div>
    </div>
</section>    


<?php require_once "includes/footer.php"; ?>
