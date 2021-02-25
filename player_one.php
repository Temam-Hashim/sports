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
                  <li class="active">Player Detail</li>
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
                        if(isset($_GET['player_id'])){
                          $player_id = $_GET['player_id'];

                          $query = "SELECT * FROM player where player_id=$player_id";
                          $result = mysqli_query($connect,$query);
                      
                           while($row = mysqli_fetch_assoc($result)){
                              $player_image = $row['player_image'];
                               $player_name = $row['player_name'];
                               $player_email = $row['player_email'];
                               $player_mobile = $row['player_mobile'];
                               
                               
                               } 
                              }
                              ?>

                           <ul>
                              <li>
                                 <img src="uploads/<?php echo !empty($row['player_image'])?$player_image:"blank2.png" ;?>" width="250" height="250" alt="">
                                 <span class="text-center"><?php echo $player_name; ?></span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </aside>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                        <!-- <h4 class="text-primary"><?php $player_name."Contact  Detail";?></h4> -->
                           <ul>
                              <li>
                                <h5 class="text-normal">Player Email</h5> <span><a class="text-info text-center" title="click to mail" href="mailto:<?php echo $player_email; ?>"><?php echo $player_email; ?></a></span>
                              </li>
                            </ul>
                            <ul>
                              <li>
                              <h5 class="text-normal">Player Phone</h5> <span> <a class="text-info text-center" title="click to call" href="tel://+91 <?php echo $player_mobile; ?>"><?php echo $player_mobile; ?></a></span>
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
