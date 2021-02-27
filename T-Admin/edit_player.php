<?php 
  include "includes/header.php"; 
  include "includes/auth.php";
?>

<!-- get all the data of player to be edited inside input box -->
<?php
    if(isset($_GET['edit_key'])){
      $p_id = $_GET['edit_key'];

      $query = "SELECT * FROM player WHERE player_id = $p_id";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_array($result);

      $p_name = $row['player_name'];
      $p_email = $row['player_email'];
      $p_mobile = $row['player_mobile'];
      $p_team = $row['player_team'];
      $p_dept = $row['player_dept'];
      $p_position = $row['player_position'];
      $p_image = $row['player_image'];
      $p_status = $row['player_status'];
    }
?>
   <!-- your code here -->
<?php
if(isset($_POST['update'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $position = $_POST['position'];
   $dept = $_POST['dept'];
   $team = $_POST['team'];
   $status = $_POST['status']; 

   
  $profile = $_FILES['avatar']['name'];
  $profile_temp = $_FILES['avatar']['tmp_name'];
  move_uploaded_file($profile_temp,"../uploads/".$profile);

  if(empty($profile)){
    $profile = $p_image;
  }

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "UPDATE  `player` SET 
              `player_name`='$name', `player_position`='$position', `player_dept`='$dept', 
              `player_team`='$team', `player_image`='$profile', `player_email`='$email',
              `player_mobile`='$mobile', `player_status`='$status' WHERE `player_id`=$p_id";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Player Updated Successfully');</script>";
         header("Location:player.php");
      }else{
         echo "<script>alert('Player update  Failed please try again');</script>";
        //  echo mysqli_error($connect);

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
		      <h4 style="margin:auto;width:50%;"><a  href="../register.php">Add New Player</a></h4>
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                    <form action="" method="POST"  enctype="multipart/form-data" role="form">
                    <legend class="text-info text-center"> Volleyball Registration Form 2021 </legend>
                    <div  class="myform">
                    <div class="form-group">
                      <label for="name">FULL NAME </label><span class="text-danger">*</span> 
                      <input type="text" class="myinput form-control" id="name" name="name" placeholder="Name" value="<?php echo $p_name;?>" required>
                    </div>
                    <div class="form-group">
                      <label for="email">EMAIL</label><span class="text-danger">*</span>
                      <input type="text" class=" myinput form-control" id="email" name="email" placeholder="Email" value="<?php echo $p_email;?>" required>
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile</label><span class="text-danger">*</span>
                      <input type="text" class=" myinput form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $p_mobile;?>" required>
                    </div>

                    <div class="form-group">
                      <label for="avatar">Profile Picture</label><span class="text-danger">*</span>
                      <input type="file" class="myinput form-control-file" id="avatar" name="avatar"  >
                    </div>

                    <div class="form-group">
                      <label for="position">Postion</label><span class="text-danger">*</span>
                      <select  class=" myinput form-control" name="position" id="position" required>
                        <option value="<?php echo $p_position; ?>"><?php echo $p_position; ?></option>
                        <option value="Setter">Setter</option>
                        <option value="Outside Hitter">Outside Hitter</option>
                        <option value="Opposite Hitter">Opposite Hitter</option>
                        <option value="Middle Blocker">Middle Blocker</option>
                        <option value="Libro">Libero</option>
                        <option value="Defensive Specialist">Defensive Specialist</option>
                        
                      </select>
                    </div>

                                <div class="form-group">
                                  <label for="mobile">Department</label><span class="text-danger">*</span>
                                  <select class=" myinput form-control" name="dept" id="dept" required>
                                    <option value="<?php echo $p_dept; ?>"><?php echo $p_dept; ?></option>
                                    <option value="CE">CE</option>
                                    <option value="CSE">CSE</option>
                                    <option value="ECS">ECS</option>
                                    <option value="EE">EEE</option>
                                    <option value="ETC">ETC</option>
                                    <option value="EE">EE</option>
                                    <option value="other">Other</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="team">Team</label><span class="text-danger">*</span>
                                  <select class=" myinput form-control" name="team" id="team" required>
                                    <option value="<?php echo $p_team; ?>"><?php echo $p_team; ?></option>
                                    <option value="CE&ETC">CE & ETC</option>
                                    <option value="CSE&ME">CSE & ME</option>
                                    <option value="ECS">ECS</option>
                                    <option value="EEE">EEE</option>
                                    <option value="none">Not Assigned</option>
                                  </select>
                                </div>  
                                <div class="form-group">
                                  <label for="status">Player Status</label><span class="text-danger">*</span>
                                  <select class=" myinput form-control" name="status" id="status" required>
                                  <option value="<?php echo $p_status; ?>"><?php echo $p_status; ?></option>
                                    <?php 
                                    if($p_status=='available'){
                                      echo "<option value='injured'>injured</option>";
                                    }
                                    else{
                                        echo " <option value='available'>available</option>";
                                    }

                                    ?>
                                  </select>
                                </div>  
                              
                                
                                <div  style="margin:auto;width:50%;">
                                  <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
                                </div> 
                                </div>   
                              </form>
               
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
   




<?php include "includes/footer.php"; ?>