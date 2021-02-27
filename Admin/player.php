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
                                    <ul>
                                      <li class="btn btn-primmary px-2 mx-2"><a href="../register.php">Add New Player</a></li>
                                    </ul>
                                </div>
                                       
                            </div>
                          </div>
                            
                        <!--/.content-->
                    </div>
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->


                                
                                      <table class="table table-bordered table-hover table-resposive">
                                        <thead>
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

                                <!-- <div class="module-body table  table-responsive">   
                                </div> -->
                         
               
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>


  







<?php include "includes/footer.php"; ?>