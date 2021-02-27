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

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="result_new.php">Add New Result</a></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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