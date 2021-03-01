<?php include "includes/header.php"; ?>
<?php include "../includes/auth.php"; ?>

   <!-- your code here -->
<?php
if(isset($_POST['new_gallery'])){
   $g_image = $_FILES['g_image']['name'];
   $g_image_temp = $_FILES['g_image']['tmp_name'];

   $g_date = $_POST['g_date'];
   $g_desc = $_POST['g_desc'];


    move_uploaded_file($g_image_temp,__DIR__."/uploads/".$g_image);

 
      $query = "INSERT INTO `gallery`(`g_image`, `g_desc`, `g_date`) 
                VALUES ('$g_image','$g_desc','$g_date')";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Gallery Added Successfully');</script>";
         header("Location:gallery.php");
      }else{
         echo "<script>alert('Gallery Adding Failed please try again');</script>";
        // echo mysqli_error($connect);

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
  input[type="file"]{
    border:2px solid skyblue;
    width:30px;
    height:auto;
  }


</style>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title " style="margin:auto;width:50%;"><a  href="gallery.php"> Gallery</a></h4>
    
                </div>
                <div class="card-body">

                                    <div  class="myform">
                                      
                                      <form action="" method="POST"  enctype="multipart/form-data" role="form">
                                        <legend class="text-info text-center"> Add New Gallery </legend>

                                        <div class="form-group">
                                          <label for="g_image" style="font:solid 22px;color:blue">Click to Add Gallery Image</label><span class="text-danger">*</span>
                                          <input type="file" class="myinput form-control" name="g_image" id="g_image" required>
                                          <small>click on the label to add image</small>
                                        </div>
                                        <div class="form-group">
                                          <label for="g_date" style="font:solid 22px;color:blue">Date</label><span class="text-danger">*</span>
                                          <input type="date" class="myinput form-control" name="g_date" id="g_date" required>
                                        </div>  
                                        <div class="form-group">
                                          <label for="g_desc" style="font:solid 22px;color:blue">Image Description</label><span class="text-danger">*</span>
                                          <textarea name="g_desc" id="g_desc" cols="30" rows="10" class="myinput form-control" required></textarea>
                                        </div> 
                                       
                                      
                                        
                                        <div  style="margin:auto;width:50%;">
                                          <button type="submit" class="btn btn-primary" name="new_gallery">ADD NEW GAllery</button>
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