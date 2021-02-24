<?php include "includes/header.php"; ?>


                    <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Players</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Action</button>
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="../register.php">Add New Player</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->
                                </div>

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


<div class="inner-page-banner">

      <div  style="margin:auto;width:90%;padding:10px;background:#f0e68c">
        
        <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Add New Match </legend>

          <div class="form-group">
            <label for="team">Team One</label><span class="text-danger">*</span>
            <select class=" form-control" name="team_1" id="team_1" required>
              <option value="CE&ETC">CE & ETC</option>
              <option value="CSE&ME">CSE & ME</option>
              <option value="ECS">ECS</option>
              <option value="EEE">EEE</option>
            </select>
          </div>
          <div class="form-group">
            <label for="team">Team Two</label><span class="text-danger">*</span>
            <select class=" form-control" name="team_2" id="team_2" required>
              <option value="CE&ETC">CE & ETC</option>
              <option value="CSE&ME">CSE & ME</option>
              <option value="ECS">ECS</option>
              <option value="EEE">EEE</option>
            </select>
          </div>  
          <div class="form-group">
            <label for="status">Match Status</label><span class="text-danger">*</span>
            <select class=" form-control" name="match_status" id="match_status" required>
              <option value="">Select Status</option>
              <option value='completed'>completed</option>";
              <option value='upcoming'>upcoming</option>";
            </select>
          </div> 
          <div class="form-group">
            <label for="status">Match Date</label><span class="text-danger">*</span>
               <input type="date" class="form-control" name="match_date" >
          </div> 
          <div class="form-group">
            <label for="status">Match Time</label><span class="text-danger">*</span>
               <input type="time" class="form-control" name="match_time" >
          </div>
        
          
          <div  style="margin:auto;width:50%;">
            <button type="submit" class="btn btn-primary" name="new_match">ADD NEW MATCH</button>
          </div>    
        </form>
        
</div>

 <!--  end your code here-->
                                <div class="module-foot">
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

<?php include "includes/footer.php"; ?>