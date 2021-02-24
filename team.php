<?php require_once "includes/header.php";?>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>

         <div class="inner-information-text">
            <div class="container">
               <h3>Our Team</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Our Team</li>
               </ul>
            </div>
         </div>
      </section>
<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#players" aria-controls="players" role="tab" data-toggle="tab">PLAYERS</a>
        </li>
        <li role="presentation">
            <a href="#eee" aria-controls="eee" role="tab" data-toggle="tab">EEE</a>
        </li>
        <li role="presentation">
            <a href="#ecs" aria-controls="ecs" role="tab" data-toggle="tab">ECS</a>
        </li>
        <li role="presentation">
            <a href="#cse_me" aria-controls="cse_me" role="tab" data-toggle="tab">CSE & ME</a>
        </li>
        <li role="presentation">
            <a href="#ce_etc" aria-controls="ce_etc" role="tab" data-toggle="tab">CE & ETC</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="players">
           <!-- content start -->
           <section id="contant" class="contant main-heading team">
               <div class="row">
                  <div class="container">
                  <?php 
                     $query1 = "SELECT * FROM player";
                     $result1 = mysqli_query($connect,$query1);
                     while($row = mysqli_fetch_assoc($result1)){
                     ?>
                     <div class="col-md-3 column">
                        <div class="card">
                           <img class="img-responsive" src="uploads/<?php echo empty($row['player_image'])? "blank2.png": $row['player_image'];?>" alt="<?php $row['player_name'];?>" style="width:100%">
                           <div class="">
                              <h4><?php echo $row['player_name'];?></h4>
                              <p class="title"><?php echo $row['player_position'];?></p>
                              <p>
                              <div class="center"><button class="button">Contact</button></div>
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </section>

           <!-- //content ends -->
        </div>
        <div role="tabpanel" class="tab-pane active" id="eee">
                   <!-- content start -->
            <section id="contant" class="contant main-heading team">
               <div class="row">
                  <div class="container">
                  <?php 
                     $query1 = "SELECT * FROM player WHERE player_team='EEE'";
                     $result1 = mysqli_query($connect,$query1);
                     while($row = mysqli_fetch_assoc($result1)){
                     ?>
                     <div class="col-md-3 column">
                        <div class="card">
                           <img class="img-responsive" src="uploads/<?php echo empty($row['player_image'])? "blank2.png": $row['player_image'];?>" alt="<?php $row['player_name'];?>" style="width:100%">
                           <div class="">
                              <h4><?php echo $row['player_name'];?></h4>
                              <p class="title"><?php echo $row['player_position'];?></p>
                              <p>
                              <div class="center"><button class="button">Contact</button></div>
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </section>
           <!-- //content ends -->
        </div>

        <div role="tabpanel" class="tab-pane active" id="ecs">
                   <!-- content start -->
            <section id="contant" class="contant main-heading team">
               <div class="row">
                  <div class="container">
                  <?php 
                     $query1 = "SELECT * FROM player WHERE player_team='ECS'";
                     $result1 = mysqli_query($connect,$query1);
                     while($row = mysqli_fetch_assoc($result1)){
                     ?>
                     <div class="col-md-3 column">
                        <div class="card">
                           <img class="img-responsive" src="uploads/<?php echo empty($row['player_image'])? "blank2.png": $row['player_image'];?>" alt="<?php $row['player_name'];?>" style="width:100%">
                           <div class="">
                              <h4><?php echo $row['player_name'];?></h4>
                              <p class="title"><?php echo $row['player_position'];?></p>
                              <p>
                              <div class="center"><button class="button">Contact</button></div>
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </section>
           <!-- //content ends -->
        </div>
        <div role="tabpanel" class="tab-pane active" id="cse_me">
                   <!-- content start -->
            <section id="contant" class="contant main-heading team">
               <div class="row">
                  <div class="container">
                  <?php 
                     $query1 = "SELECT * FROM player WHERE player_team='CSE&ME'";
                     $result1 = mysqli_query($connect,$query1);
                     while($row = mysqli_fetch_assoc($result1)){
                     ?>
                     <div class="col-md-3 column">
                        <div class="card">
                           <img class="img-responsive" src="uploads/<?php echo empty($row['player_image'])? "blank2.png": $row['player_image'];?>" alt="<?php $row['player_name'];?>" style="width:100%">
                           <div class="">
                              <h4><?php echo $row['player_name'];?></h4>
                              <p class="title"><?php echo $row['player_position'];?></p>
                              <p>
                              <div class="center"><button class="button">Contact</button></div>
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </section>
           <!-- //content ends -->
        </div>

        <div role="tabpanel" class="tab-pane active" id="ce_etc">
                   <!-- content start -->
            <section id="contant" class="contant main-heading team">
               <div class="row">
                  <div class="container">
                  <?php 
                     $query1 = "SELECT * FROM player WHERE player_team='CE&ETC'";
                     $result1 = mysqli_query($connect,$query1);
                     while($row = mysqli_fetch_assoc($result1)){
                     ?>
                     <div class="col-md-3 column">
                        <div class="card">
                           <img class="img-responsive" src="uploads/<?php echo empty($row['player_image'])? "blank2.png": $row['player_image'];?>" alt="<?php $row['player_name'];?>" style="width:100%">
                           <div class="">
                              <h4><?php echo $row['player_name'];?></h4>
                              <p class="title"><?php echo $row['player_position'];?></p>
                              <p>
                              <div class="center"><button class="button">Contact</button></div>
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </section>
           <!-- //content ends -->
        </div>
        
        
    </div>
</div>
<?php require_once "includes/footer.php";?>