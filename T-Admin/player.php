<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>


<!-- delete Player -->
<?php
  if(isset($_GET['delete_key'])){
    $p_id = $_GET['delete_key'];

    $query = "DELETE FROM player WHERE player_id = $p_id";
    $result = mysqli_query($connect,$query);
    if($result){
      echo "<script>alert('splayer deleted successfully')</script>";
      header("Location:player.php");
    }
    else{
      echo "<script>alert('something wents wrong')</script>";
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
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="../register.php">Add New Player</a></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      <tr>
                        <th>Player Id</th>
                        <th>Player Name</th>
                        <th>Player Email</th>
                        <th>Player Mobile</th>
                        <th>Player Image</th>
                        <th>Player Position</th>
                        <th>Player Team</th>
                        <th>Player Status</th>
                        <th colspan="2">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                          $query = "SELECT * FROM player";
                          $resullt = mysqli_query($connect,$query);
                          while($row = mysqli_fetch_assoc($resullt)){
                      ?>
                        <tr>
                          <td><?php echo $row['player_id'];?></td>
                          <td><?php echo $row['player_name'];?></td>
                          <td><?php echo $row['player_email'];?></td>
                          <td><?php echo $row['player_mobile'];?></td>
                          <td><img width="100" src="../uploads/<?php echo $row['player_image'];?>"/></td>
                          <td><?php echo $row['player_position'];?></td>
                          <td><?php echo $row['player_team'];?></td>
                          <td><?php echo $row['player_status'];?></td>
                          <td> <a href="edit_player.php?edit_key=<?php echo $row['player_id'];?>">Edit</a> </td>
                          <td> <a href="player.php?delete_key=<?php echo $row['player_id'];?>">Delete</a> </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
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