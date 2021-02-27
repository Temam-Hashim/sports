<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>



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

  
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="match_new.php">Add New Match</a></h4>
                </div>
                <div class="card-body">
                                <div class="module-body table">
                                      <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                          <tr>
                                            <th>match Id</th>
                                            <th>Team One</th>
                                            <th>Team Two</th>
                                            <th>Match Date</th>
                                            <th>Match Time</th>
                                            <th>Match status</th>
                                            <th>Res1</th>
                                            <th>Res2</th>
                                            <th colspan="2">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM `match` order by `match_date` and match_time";
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
                                            <td><?php echo $row['res1'];?></td>
                                            <td><?php echo $row['res2'];?></td>
                                            <td> <a href="match_edit.php?edit_key=<?php echo $row['match_id'];?>">Edit</a> </td>
                                            <td> <a href="match.php?delete_key=<?php echo $row['match_id'];?>">Delete</a> </td>
                                          </tr>
                                          <?php }?>
                                        </tbody>
                                      </table>  
                                </div>

                            </div>
                        </div>
                      </div>
                    </div>
             

  <?php include "includes/footer.php"; ?>