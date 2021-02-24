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
if(isset($_POST['new_result'])){
   $team_name = $_POST['team_name'];
   $played = $_POST['played'];
   $win = $_POST['win'];
   $draw = $_POST['draw'];
   $loss = $_POST['loss'];
   $point = $_POST['point'];

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "INSERT INTO `results`(`team_name`, `played`, `win`, `draw`, `loss`,`point`) 
                VALUES ('$team_name','$played','$win','$draw','$loss','$point')";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Result Added Successfully');</script>";
         header("Location:result.php");
      }else{
         echo "<script>alert('Result Adding Failed please try again');</script>";
        //  echo mysqli_error($connect);

   }

}

?>


<div class="inner-page-banner">

      <div  style="margin:auto;width:90%;padding:10px;background:#f0e68c">
        
        <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Add New Result </legend>

          <div class="form-group">
            <label for="team">Team One</label><span class="text-danger">*</span>
            <select class=" form-control" name="team_name" id="team_name" required>
            <option value="">Select team</option>
              <option value="CE&ETC">CE & ETC</option>
              <option value="CSE&ME">CSE & ME</option>
              <option value="ECS">ECS</option>
              <option value="EEE">EEE</option>
            </select>
          </div>
          <div class="form-group">
            <label for="team">Match Played</label><span class="text-danger">*</span>
            <input type="number" max="100" min="0" class="form-control" name="played" >
          </div>  
          <div class="form-group">
            <label for="team">Match Win</label><span class="text-danger">*</span>
            <input type="number" max="100" min="0" class="form-control" name="win" >
          </div>  
          <div class="form-group">
            <label for="team">Match Draw</label><span class="text-danger">*</span>
            <input type="number" max="100" min="0" class="form-control" name="draw" >
          </div>
          <div class="form-group">
            <label for="team">Match Loss</label><span class="text-danger">*</span>
            <input type="number" max="100" min="0" class="form-control" name="loss" >
          </div>
         
          <div class="form-group">
            <label for="team">Total Point</label><span class="text-danger">*</span>
            <input type="number" max="100" min="0" class="form-control" name="point" >
          </div>  

          <div  style="margin:auto;width:50%;">
            <button type="submit" max="100" min="0" class="btn btn-primary" name="new_result">ADD NEW Result</button>
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