<?php 
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>




<!-- get all the data of player to be edited inside input box -->
<?php
    if(isset($_GET['edit_key'])){
      $p_id = $_GET['edit_key'];

      $query = "SELECT * FROM `gallery` WHERE `g_id`=$p_id";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_array($result);

      $g_image_db = $row['g_image'];
      $g_date_db = $row['g_date'];
      $g_desc_db = $row['g_desc'];
    }
?>
   <!-- your code here -->
<?php
if(isset($_POST['update_gallery'])){
  $g_image = $_FILES['g_image']['name'];
  $g_image_temp = $_FILES['g_image']['tmp_name'];

   $g_date = $_POST['g_date'];
   $g_desc = $_POST['g_desc'];

  
    move_uploaded_file($g_image_temp,"uploads/".$g_image);

   if(empty($g_image)){
     $g_image = $g_image_db;
   }
   

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);


      $query = "UPDATE  `gallery` SET 
              `g_image`='$g_image', `g_desc`='$g_desc', `g_date`='$g_date' WHERE `g_id`=$p_id";
      $result = mysqli_query($connect,$query);

      if($result){
         echo "<script>alert('Gallery Updated Successfully');</script>";
         header("Location:gallery.php");
      }else{
         echo "<script>alert('Gallery update  Failed please try again');</script>";
          echo mysqli_error($connect);

   }

}

?>

<style>
  .myinput{
    border: solid 2px skyblue;
    border-radius:5px;
    margin-bottom:20px;

  }
    .myform{
      margin:auto;
      width:90%;
      padding:22px;

  
  }

</style>




      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
		 
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="match_new.php">Add New Player</a></h4>
                </div>
                <div class="card-body">
                            <div  class="myform">
                                
                            <form action="" method="POST"  enctype="multipart/form-data" role="form">
                                        <legend class="text-info text-center"> Update Gallery </legend>

                                        <div class="form-group">
                                          <label for="g_image" style="font:solid 22px;color:blue">Click to Add Gallery Image</label><span class="text-danger">*</span>
                                          <input type="file" class="myinput form-control" name="g_image" id="g_image"  required>
                                          <small>click on the label to add image</small>
                                        </div>
                                        <div class="form-group">
                                          <label for="g_date" style="font:solid 22px;color:blue">Date</label><span class="text-danger">*</span>
                                          <input type="date" class="myinput form-control" name="g_date" id="g_date" value="<?php echo $g_date_db;?>" required>
                                        </div>  
                                        <div class="form-group">
                                          <label for="g_desc" style="font:solid 22px;color:blue">Image Description</label><span class="text-danger">*</span>
                                          <textarea name="g_desc" id="g_desc" cols="30" rows="10" class="myinput form-control" required><?php echo $g_desc_db;?></textarea>
                                        </div> 
                                       
                                      
                                        
                                        <div  style="margin:auto;width:50%;">
                                          <button type="submit" class="btn btn-primary" name="update_gallery">Update Gallery</button>
                                        </div>    
                                      </form>
                                
                        </div>
            
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
   




<?php include "includes/footer.php"; ?>