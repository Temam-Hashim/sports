<?php 
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>




<!-- get all the data of player to be edited inside input box -->
<?php
    if(isset($_GET['edit_key'])){
      $p_id = $_GET['edit_key'];

      $query = "SELECT * FROM `match` WHERE `match_id`=$p_id";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_array($result);

      $m_team_1 = $row['team_1'];
      $m_team_2 = $row['team_2'];
      $m_date = $row['match_date'];
      $m_time = $row['match_time'];
      $m_status = $row['match_status'];
      $m_res1 = $row['res1'];
      $m_res2 = $row['res2'];
    }
?>
   <!-- your code here -->
<?php
if(isset($_POST['update'])){
   $team_1 = $_POST['team_1'];
   $team_2 = $_POST['team_2'];
   $date = $_POST['match_date'];
   $time = $_POST['match_time'];
   $status = $_POST['match_status'];
   $res1 = $_POST['result1'];
   $res2 = $_POST['result2'];

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);


      $query = "UPDATE  `match` SET 
              `team_1`='$team_1', `team_2`='$team_2', `match_date`='$date', `match_time`='$time',
              `match_status`='$status' ,`res1`='$res1',`res2`='$res2' WHERE `match_id`=$p_id";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Match Updated Successfully');</script>";
         header("Location:match.php");
      }else{
         echo "<script>alert('Match update  Failed please try again');</script>";
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
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="match_new.php">Add New Player</a></h4>
                </div>
                <div class="card-body">
                            <div  class="myform">
                                
                                <form action="" method="POST"  enctype="multipart/form-data" role="form">
                                  <legend class="text-info text-center"> Match Update Pannel </legend>

                                  <div class="form-group">
                                    <label for="team">Team One</label><span class="text-danger">*</span>
                                    <select class="myinput form-control" name="team_1" id="team_1" required>
                                      <option value="<?php echo $m_team_1; ?>"><?php echo $m_team_1; ?></option>
                                      <option value="CE&ETC">CE & ETC</option>
                                      <option value="CSE&ME">CSE & ME</option>
                                      <option value="ECS">ECS</option>
                                      <option value="EEE">EEE</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="team">Team Two</label><span class="text-danger">*</span>
                                    <select class="myinput form-control" name="team_2" id="team_2" required>
                                      <option value="<?php echo $m_team_2; ?>"><?php echo $m_team_2; ?></option>
                                      <option value="CE&ETC">CE & ETC</option>
                                      <option value="CSE&ME">CSE & ME</option>
                                      <option value="ECS">ECS</option>
                                      <option value="EEE">EEE</option>
                                    </select>
                                  </div>  
                                  <div class="form-group">
                                    <label for="status">Match Status</label><span class="text-danger">*</span>
                                    <select class="myinput form-control" name="match_status" id="match_status" required>
                                      <option value="<?php echo $m_status; ?>"><?php echo $m_status; ?></option>
                                      <option value="postponded">Postponded</option>
                                      <option value="upcoming">upcoming</option>
                                      <option value="completed">completed</option>
                                    </select>
                                  </div> 
                                  <div class="form-group">
                                    <label for="status">Match Date</label><span class="text-danger">*</span>
                                      <input type="date" class="myinput form-control" name="match_date" value="<?php echo $m_date;?>">
                                  </div> 
                                  <div class="form-group">
                                    <label for="status">Match Time</label><span class="text-danger">*</span>
                                      <input type="time" class="myinput form-control" name="match_time" value="<?php echo $m_time;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="status">Result1</label><span class="text-danger">*</span>
                                      <input type="number" class="myinput form-control" name="result1" value="<?php echo $m_res2;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="status">Result2</label><span class="text-danger">*</span>
                                      <input type="number" class="myinput form-control" name="result2" value="<?php echo $m_res2;?>">
                                  </div>
                                
                                  
                                  <div  style="margin:auto;width:50%;">
                                    <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
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