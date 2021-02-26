<?php require_once "includes/header.php"; ?>

<div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
                                <!-- match slider start -->
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Match Detail</li>
               </ul>
            </div>
         </div>
      </section>

<!-- match -->
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
                   <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                        <?php 
                        if(isset($_GET['match_id'])){
                          $match_id = $_GET['match_id'];
                           $query = "SELECT * FROM `match` WHERE match_id=$match_id";
                           $result = mysqli_query($connect,$query);
                           while($row = mysqli_fetch_assoc($result)){
                               $team_1 = $row['team_1'];
                               $team_2 = $row['team_2'];
                               $match_date = $row['match_date'];
                               $match_time = $row['match_time'];
                               $match_status = $row['match_status'];
                               $res1 = $row['res1'];
                               $res2 = $row['res2'];
                               
                               } 
                              }
                              ?>

                           <ul>
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
                        </div>
                     </div>
                  </aside>

                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                <h5 class="text-primary">match date</h5> <span><?php echo $match_date; ?></span>
                              </li>
                            </ul>
                            <ul>
                              <li>
                              <h5 class="text-primary">match time</h5> <span><?php echo $match_time." PM"; ?></span>
                              </li>
                            </ul>

                            <ul>
                              <li>
                              <h5 class="text-primary">match status</h5> <span><?php echo $match_status; ?></span>
                              </li>
                           </ul>
                           
                           <ul>
                              <li>
                              <h5 class="text-primary">match Result</h5> <span><?php echo $team_1.' '.$res1.':'.$res2.' '.$team_2; ?></span>
                              </li>
                           </ul>

                        </div>
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
