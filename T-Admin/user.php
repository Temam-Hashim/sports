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
       <!-- End Navbar -->
       <div class="content">
        <div class="container-fluid">
          <div class="row">
  
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">User Table</h4>
                  <h4 class="card-title " style="margin:auto;width:50%;"><a  href="user_new.php">Add New User</a></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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
                      
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

  <?php include "includes/footer.php"; ?>