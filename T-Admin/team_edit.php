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

<?php 
if(isset($_GET['edit_key'])){
$team_id = $_GET['edit_key'];

    $query = "SELECT * FROM `team` WHERE `team_id`=$team_id";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);
    $image_db = $row['team_image'];


?>


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
                    <div class="myform">
                        
                        <form action="" method="POST" class="myinput form-horizontal" enctype="multipart/form-data" role="form">
                            <div class="form-group">
                              <legend>Edit Team</legend>
                            </div>
                            
                            <div class="form-group">
                              <label for="" color="skyblue">Team Name</label><span class="text-danger">*</span>
                              <input type="text"  class="myinput form-control" id="team_name" name="Uteam_name" value="<?php echo $row['team_name'];?>" style="width:310px;">
                            </div>
                            <div class="form-group">
                              <label for="" color="skyblue">Team Image</label>
                              <input type="file" class="myinput form-control" id="team_image" name="Uteam_image"  style="width:320px;">
                            </div>

                            <div class="form-group">
                              <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary" name="update_team">Update</button>
                              </div>
                            </div>
                        </form>
                    </div>
                 </div>

                   
                    
              </div>
            </div>
          </div>
        </div>
                 <?php  
                      if(isset($_POST['update_team'])) {
                        $Uteam_name = $_POST['Uteam_name'];

                        $Uteam_image = $_FILES['Uteam_image']['name'];
                        $Uteam_image_tmp = $_FILES['Uteam_image']['tmp_name'];

                        move_uploaded_file($Uteam_image_tmp,"../images/".$Uteam_image);

                        if(empty($Uteam_image)){
                          $Uteam_image = $image_db;
                        }

                        $query = "UPDATE `team` SET team_name='$Uteam_name',team_image='$Uteam_image' WHERE team_id=$team_id";
                        $result = mysqli_query($connect,$query);
                                                            
                            if($result){
                              echo "<script>alert('Team AUpdated Successfully');</script>";
                              header("Location:team.php");
                          }else{
                              echo "<script>alert('Team update Failed please try again');</script>";
                              echo mysqli_error($connect);

                        }
                      }
                    
                    }?>





  <?php include "includes/footer.php"; ?>