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
                    <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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
                                <td> <a href="team_edit.php?edit_key=<?php echo $row['team_id'];?>">Edit</a> </td>
                                <td> <a href="team.php?delete_key=<?php echo $row['team_id'];?>">Delete</a> </td>
                              </tr>
                              <?php }?>
                            </tbody>
                          </table> 
                      </div>
                      </div>

                    
              </div>
            </div>
          </div>
        </div>





  <?php include "includes/footer.php"; ?>