<?php require_once "includes/header.php"; ?>

    
<div class="inner-page-banner">
            <div class="container">
            </div>
         </div>

         <div class="inner-information-text">
            <div class="container">
               <h3>Gallery</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Gallery</li>
               </ul>
            </div>
         </div>
      </section>

      <!-- gallery -->
      <?php 
            $query = "SELECT * FROM `gallery` order by g_id desc";
            $result = mysqli_query($connect,$query);
            while($row = mysqli_fetch_assoc($result)){
                  $g_id = $row['g_id'];
                  $g_image = $row['g_image'];
                  $g_desc = $row['g_desc'];
                  $g_date = $row['g_date'];
         ?>

         <div class="gallery">
         <a target="_blank" href="uploads/<?php echo $g_image;?>">
            <img src="uploads/<?php echo $g_image;?>" alt="Cinque Terre" width="1000" height="400">
         </a>
         <div class="desc"><?php echo $g_desc;?></div>
         </div>
         <?php } ?>











<?php require_once "includes/footer.php"; ?>
