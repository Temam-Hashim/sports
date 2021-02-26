<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>



<!-- delete Player -->
<?php
  if(isset($_GET['delete_key'])){
    $user_id = $_GET['delete_key'];

    $query = "DELETE FROM `login` WHERE `id`=$user_id";
    $result = mysqli_query($connect,$query);
    if($result){
      echo "<script>alert('user deleted successfully')</script>";
      header("Location:user.php");
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
                                                <li><a href="user_new.php">Add New Result</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <ul>
                                      <li class="btn btn-primmary px-2 mx-2"><a href="user_new.php">Add New User</a></li>
                                    </ul>
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->

                                </div>
                                <div class="module-body table">
                                      <table class="table table-bordered table-hover">
                                        <thead>
                                          <tr>
                                            <th>User Id</th>
                                            <th>User Name</th>
                                            <th colspan=2>Action</th>
              
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM `login`";
                                            $result = mysqli_query($connect,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                          <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            
                                            <td> <a href="user_edit.php?edit_key=<?php echo $row['id'];?>">Edit</a> </td>
                                            <td> <a href="user.php?delete_key=<?php echo $row['id'];?>">Delete</a> </td>
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