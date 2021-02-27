<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>



<!-- delete Player -->
<?php
  if(isset($_GET['delete_key'])){
    $r_id = $_GET['delete_key'];

    $query = "DELETE FROM `results` WHERE `id`=$r_id";
    $result = mysqli_query($connect,$query);
    if($result){
      echo "<script>alert('match result deleted successfully')</script>";
      header("Location:result.php");
    }
    else{
      echo "<script>alert('something wents wrong')</script>";
      // echo mysqli_error($connect);
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
                                                <li><a href="result_new.php">Add New Result</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <ul>
                                      <li class="btn btn-primmary px-2 mx-2"><a href="result_new.php">Add New match</a></li>
                                    </ul>
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->

                                </div>
                                <div class="module-body table">
                                      <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                          <tr>
                                            <th>Id</th>
                                            <th>Team Name</th>
                                            <th>Match Played</th>
                                            <th>Match Win</th>
                                            <th>Match Loss</th>
                                            <th>Total Point</th>
                                            <th colspan="2">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM `results` order by `point` DESC";
                                            $result = mysqli_query($connect,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                          <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['team_name'];?></td>
                                            <td><?php echo $row['played'];?></td>
                                            <td><?php echo $row['win'];?></td>
                                            <td><?php echo $row['loss'];?></td>
                                            <td><?php echo $row['point'];?></td>
                                            <td> <a href="result_edit.php?edit_key=<?php echo $row['id'];?>">Edit</a> </td>
                                            <td> <a href="result.php?delete_key=<?php echo $row['id'];?>">Delete</a> </td>
                                          </tr>
                                          <?php }?>
                                        </tbody>
                                      </table>

                                </div>
                                <!-- <div class="module-foot">
                                </div> -->
                                <form class="form-inline">
 
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