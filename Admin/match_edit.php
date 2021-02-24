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

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);


      $query = "UPDATE  `match` SET 
              `team_1`='$team_1', `team_2`='$team_2', `match_date`='$date', `match_time`='$time',
              `match_status`='$status' WHERE `match_id`=$p_id";

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


<div class="inner-page-banner">

      <div  style="margin:auto;width:90%;padding:10px;background:#f0e68c">
        
        <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Match Update Pannel </legend>

          <div class="form-group">
            <label for="team">Team One</label><span class="text-danger">*</span>
            <select class=" form-control" name="team_1" id="team_1" required>
              <option value="<?php echo $m_team_1; ?>"><?php echo $m_team_1; ?></option>
              <option value="CE&ETC">CE & ETC</option>
              <option value="CSE&ME">CSE & ME</option>
              <option value="ECS">ECS</option>
              <option value="EEE">EEE</option>
            </select>
          </div>
          <div class="form-group">
            <label for="team">Team Two</label><span class="text-danger">*</span>
            <select class=" form-control" name="team_2" id="team_2" required>
              <option value="<?php echo $m_team_2; ?>"><?php echo $m_team_2; ?></option>
              <option value="CE&ETC">CE & ETC</option>
              <option value="CSE&ME">CSE & ME</option>
              <option value="ECS">ECS</option>
              <option value="EEE">EEE</option>
            </select>
          </div>  
          <div class="form-group">
            <label for="status">Match Status</label><span class="text-danger">*</span>
            <select class=" form-control" name="match_status" id="match_status" required>
              <option value="<?php echo $m_status; ?>"><?php echo $m_status; ?></option>
              <?php 
               if($m_status=='upcoming'){
                 echo "<option value='completed'>completed</option>";
               }
               else{
                  echo " <option value='upcoming'>upcoming</option>";
               }

              ?>
            </select>
          </div> 
          <div class="form-group">
            <label for="status">Match Date</label><span class="text-danger">*</span>
               <input type="date" class="form-control" name="match_date" value="<?php echo $m_date;?>">
          </div> 
          <div class="form-group">
            <label for="status">Match Time</label><span class="text-danger">*</span>
               <input type="time" class="form-control" name="match_time" value="<?php echo $m_time;?>">
          </div>
        
          
          <div  style="margin:auto;width:50%;">
            <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
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