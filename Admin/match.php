<?php include "includes/header.php"; ?>



<!-- delete Player -->
<?php
  if(isset($_GET['delete_key'])){
    $m_id = $_GET['delete_key'];

    $query = "DELETE FROM `match` WHERE `match_id`=$m_id";
    $result = mysqli_query($connect,$query);
    if($result){
      echo "<script>alert('match deleted successfully')</script>";
      header("Location:match.php");
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
                                                <li><a href="match_new.php">Add New match</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->

                                </div>
                                <div class="module-body table">
                                      <table class="table table-bordered table-hover">
                                        <thead>
                                          <tr>
                                            <th>match Id</th>
                                            <th>Team One</th>
                                            <th>Team Two</th>
                                            <th>Match Date</th>
                                            <th>Match Time</th>
                                            <th>Match status</th>
                                            <th colspan="2">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM `match` order by `match_date`";
                                            $result = mysqli_query($connect,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                          <tr>
                                            <td><?php echo $row['match_id'];?></td>
                                            <td><?php echo $row['team_1'];?></td>
                                            <td><?php echo $row['team_2'];?></td>
                                            <td><?php echo $row['match_date'];?></td>
                                            <td><?php echo $row['match_time'];?></td>
                                            <td><?php echo $row['match_status'];?></td>
                                            <td> <a href="match_edit.php?edit_key=<?php echo $row['match_id'];?>">Edit</a> </td>
                                            <td> <a href="match.php?delete_key=<?php echo $row['match_id'];?>">Delete</a> </td>
                                          </tr>
                                          <?php }?>
                                        </tbody>
                                      </table>

                                    
                                </div>
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