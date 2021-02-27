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
     <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Team</h3>
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
                                                <!-- <li><a href="team_new.php">Add New Team</a></li> -->
                                                
                                            </ul>
                                        </div>
                                    </div>
                                   <?php 
                                      if(isset($_GET['edit_key'])){
                                        $team_id = $_GET['edit_key'];

                                            $query = "SELECT * FROM `team` WHERE `team_id`=$team_id";
                                            $result = mysqli_query($connect,$query);
                                            $row = mysqli_fetch_array($result);
                                            $image_db = $row['team_image'];

                                   
                                   ?>
                                    <div class="col-md-6" style="margin:auto;width:50%;background:#f0e68c";>
                                    
                                    <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                          <legend>Edit Team</legend>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="" color="skyblue">Team Name</label>
                                          <input type="text"  class="form-control" id="team_name" name="Uteam_name" value="<?php echo $row['team_name'];?>" style="width:310px;">
                                        </div>
                                        <div class="form-group">
                                          <label for="" color="skyblue">Team Image</label>
                                          <input type="file" class="form-control" id="team_image" name="Uteam_image"  style="width:320px;">
                                        </div>

                                        <div class="form-group">
                                          <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary" name="update_team">Update</button>
                                          </div>
                                        </div>
                                    </form>
                                    
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
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->
                                </div>
                                <div class="table col-md-12" style="margin-bottom:10px;">
                                      <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                          <tr>
                                            <th>Team Id</th>
                                            <th>Team Name</th>
                                            <th>Team Image</th>
                                            <th colspan="2">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM `team`";
                                            $result = mysqli_query($connect,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                         ?>
                                          <tr>
                                            <td><?php echo $row['team_id'];?></td>
                                            <td><?php echo $row['team_name'];?></td>
                                            <td><img width="100" src="../images/<?php echo $row['team_image'];?>" alt=""></td>
                                            <td> <a href="team.php?edit_key=<?php echo $row['team_id'];?>">Edit</a> </td>
                                            <td> <a href="team.php?delete_key=<?php echo $row['team_id'];?>">Delete</a> </td>
                                          </tr>
                                          <?php }?>
                                        </tbody>
                                      </table> 
                                  </div>

                                      
                                <!-- //add new team -->
                                <div class="col md-6" style="margin:auto;width:50%;background:#f0e68c">
                                  
                                  <form action="" method="POST" enctype="multipart/form-data" role="form">
                                    <legend>Add New Team</legend>
                                  
                                    <div class="form-group">
                                      <label for="" color="skyblue">Team Name</label>
                                      <input type="text"  class="form-control" id="team_name" name="team_name" style="width:310px;">
                                    </div>
                                    <div class="form-group">
                                      <label for="" color="skyblue">Team Image</label>
                                      <input type="file" class="form-control" id="team_image" name="team_image"  style="width:320px;">
                                    </div>
                                    <div style="margin:auto;width:90%;padding:10px;">
                                      <button type="submit" name="new_team" class="btn btn-primary">Add New Team</button>
                                    </div>
                                  </form>
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