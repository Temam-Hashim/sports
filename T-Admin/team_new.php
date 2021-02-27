<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>



<!-- delete Player -->
<?php
// delete team
  if(isset($_GET['delete_key'])){
    $t_id = $_GET['delete_key'];

    $query = "DELETE FROM `team` WHERE `team_id`=$t_id";
    $result = mysqli_query($connect,$query);
    if($result){
      echo "<script>alert('match deleted successfully')</script>";
      header("Location:team.php");
    }
    else{
      echo "<script>alert('something wents wrong')</script>";
      // echo mysqli_error($connect);
    }

  }
  // add new team

  if(isset($_POST['new_team'])){
    $team_name =$_POST['team_name'];

      
  $team_image = $_FILES['team_image']['name'];
  $team_image_temp = $_FILES['team_image']['tmp_name'];
  move_uploaded_file($team_image_temp,"../images/".$profile);

    $query = "INSERT INTO `team`(`team_name`, `team_image`) VALUES ('$team_name','$team_image')";
    $result = mysqli_query($connect,$query);

    if($result){
      echo "<script>alert('Team Added Successfully');</script>";
      header("Location:team.php");
   }else{
      echo "<script>alert('Team Adding Failed please try again');</script>";
      //echo mysqli_error($connect);

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
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="team_new.php">Add New Team</a></h4>
                </div>
                <div class="card-body">

                          
                    <!-- //add new team -->
                    <div  class="myform">
                      
                      <form action="" method="POST" enctype="multipart/form-data" role="form">
                        <legend>Add New Team</legend>
                      
                        <div class="form-group">
                          <label for="" color="skyblue">Team Name</label><span class="text-danger">*</span>
                          <input type="text"  class="myinput form-control" id="team_name" name="team_name" style="width:310px;">
                        </div>
                        <div class="form-group">
                          <label for="team_image" color="skyblue">Team Image</label><span class="text-danger">*</span>
                          <input type="file" class="myinput form-control" id="team_image" name="team_image">
                        </div>
                        <div style="margin:auto;width:90%;padding:10px;">
                          <button type="submit" name="new_team" class="btn btn-primary">Add New Team</button>
                        </div>
                      </form>
                    </div>

                    
              </div>
            </div>
          </div>
        </div>





  <?php include "includes/footer.php"; ?>