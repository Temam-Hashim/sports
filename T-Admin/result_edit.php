<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>





<!-- get all the data of player to be edited inside input box -->
<?php
    if(isset($_GET['edit_key'])){
      $r_id = $_GET['edit_key'];

      $query = "SELECT * FROM `results` WHERE `id`=$r_id";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_array($result);

      $team_name_db = $row['team_name'];
      $played_db = $row['played'];
      $win_db = $row['win'];
      $draw_db = $row['draw'];
      $loss_db = $row['loss'];
      $point_db = $row['point'];
    }
?>
   <!-- your code here -->
<?php
if(isset($_POST['update'])){
  $team_name = $_POST['team_name'];
  $played = $_POST['played'];
  $win = $_POST['win'];
  $draw = $_POST['draw'];
  $loss = $_POST['loss'];
  $point = $_POST['point'];

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "UPDATE  `results` SET 
              `team_name`='$team_name', `played`='$played',`win`='$win',`draw`='$draw',`loss`='$loss',
              `point`='$point' WHERE `id`=$r_id";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Result Updated Successfully');</script>";
         header("Location:result.php");
      }else{
         echo "<script>alert('Result update  Failed please try again');</script>";
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
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
        <h4 class="card-title mt-0"> Edit match</h4>
        <h4 class="card-title " style="margin:auto;width:50%;"><a  href="team_new.php">Add New Team</a></h4>
        </div>
        <div class="card-body">

                              <div  class="myform">
                                        
                                      <form action="" method="POST"  enctype="multipart/form-data" role="form">
                                          <legend class="text-info text-center"> Update Result </legend>

                                          <div class="form-group">
                                            <label for="team">Team One</label><span class="text-danger">*</span>
                                            <select class="myinput form-control" name="team_name" id="team_name"  required>
                                            <option value="<?php echo $team_name_db;?>"><?php echo $team_name_db;?></option>
                                              <option value="CE&ETC">CE & ETC</option>
                                              <option value="CSE&ME">CSE & ME</option>
                                              <option value="ECS">ECS</option>
                                              <option value="EEE">EEE</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="team">Match Played</label><span class="text-danger">*</span>
                                            <input type="number" max="100" min="0" class="myinput form-control" name="played" value="<?php echo $played_db;?>" required >
                                          </div>  
                                          <div class="form-group">
                                            <label for="team">Match Win</label><span class="text-danger">*</span>
                                            <input type="number" max="100" min="0" class="myinput form-control" name="win" value="<?php echo $win_db;?>" required>
                                          </div>  
                                          <div class="form-group">
                                            <label for="team">Match Draw</label><span class="text-danger">*</span>
                                            <input type="number" max="100" min="0" class="myinput form-control" name="draw" value="<?php echo $draw_db;?>" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="team">Match Loss</label><span class="text-danger">*</span>
                                            <input type="number" max="100" min="0" class="myinput form-control" name="loss" value="<?php echo $loss_db;?>" required>
                                          </div>
                                        
                                          <div class="form-group">
                                            <label for="team">Total Point</label><span class="text-danger">*</span>
                                            <input type="number" max="100" min="0" class="myinput form-control" name="point" value="<?php echo $point_db;?>" required>
                                          </div>  

                                          <div  style="margin:auto;width:50%;">
                                            <button type="submit" class="btn btn-primary" name="update">Update Result</button>
                                          </div>    
                                        </form>  
                                </div>
 <!--  end your code here-->
                      </div>
                </div>
              </div>
            </div>

<?php include "includes/footer.php"; ?>