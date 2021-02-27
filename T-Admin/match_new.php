<?php include "includes/header.php"; ?>
<?php include "includes/auth.php"; ?>

   <!-- your code here -->
<?php
if(isset($_POST['new_match'])){
   $team_1 = $_POST['team_1'];
   $team_2 = $_POST['team_2'];
   $date = $_POST['match_date'];
   $time = $_POST['match_time'];
   $status = $_POST['match_status'];

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "INSERT INTO `match`(`team_1`, `team_2`, `match_date`, `match_time`, `match_status`) 
                VALUES ('$team_1','$team_2','$date','$time','$status')";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Match Added Successfully');</script>";
         header("Location:match.php");
      }else{
         echo "<script>alert('Match Adding Failed please try again');</script>";
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
                                        <legend class="text-info text-center"> Add New Match </legend>

                                        <div class="form-group">
                                          <label for="team">Team One</label><span class="text-danger">*</span>
                                          <select class="myinput form-control" name="team_1" id="team_1" required>
                                            <option value="CE&ETC">CE & ETC</option>
                                            <option value="CSE&ME">CSE & ME</option>
                                            <option value="ECS">ECS</option>
                                            <option value="EEE">EEE</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="team">Team Two</label><span class="text-danger">*</span>
                                          <select class="myinput form-control" name="team_2" id="team_2" required>
                                            <option value="CE&ETC">CE & ETC</option>
                                            <option value="CSE&ME">CSE & ME</option>
                                            <option value="ECS">ECS</option>
                                            <option value="EEE">EEE</option>
                                          </select>
                                        </div>  
                                        <div class="form-group">
                                          <label for="status">Match Status</label><span class="text-danger">*</span>
                                          <select class="myinput form-control" name="match_status" id="match_status" required>
                                            <option value="">Select Status</option>
                                            <option value='completed'>completed</option>";
                                            <option value='upcoming'>upcoming</option>";
                                          </select>
                                        </div> 
                                        <div class="form-group">
                                          <label for="status">Match Date</label><span class="text-danger">*</span>
                                            <input type="date" class="myinput form-control" name="match_date" >
                                        </div> 
                                        <div class="form-group">
                                          <label for="status">Match Time</label><span class="text-danger">*</span>
                                            <input type="time" class="myinput form-control" name="match_time" >
                                        </div>
                                      
                                        
                                        <div  style="margin:auto;width:50%;">
                                          <button type="submit" class="btn btn-primary" name="new_match">ADD NEW MATCH</button>
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