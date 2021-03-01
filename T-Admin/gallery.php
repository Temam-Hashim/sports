<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>



<!-- delete Player -->
<?php
  if(isset($_GET['delete_key'])){
    $m_id = $_GET['delete_key'];

    $query = "DELETE FROM `gallery` WHERE `g_id`=$m_id";
    $result = mysqli_query($connect,$query);
    if($result){
      echo "<script>alert('Gallery deleted successfully')</script>";
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
                <h4 class="card-title " style="margin:auto;width:50%;"><a  href="gallery_new.php">Add New Gallery</a></h4>
                </div>
                <div class="card-body">
                                <div class="module-body table">
                                      <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                          <tr>
                                            <th> Id</th>
                                            <th>Gallery</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Res2</th>
                                            <th colspan="2">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM `gallery`";
                                            $result = mysqli_query($connect,$query);
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                          <tr>
                                            <td><?php echo $row['g_id'];?></td>
                                            <td><img width="100" src="../uploads/<?php echo $row['g_image'];?>" alt=""></td>
                                            <td><?php echo $row['g_desc'];?></td>
                                            <td><?php echo $row['g_date'];?></td>
                                            <td> <a href="gallery_edit.php?edit_key=<?php echo $row['g_id'];?>">Edit</a> </td>
                                            <td> <a href="gallery.php?delete_key=<?php echo $row['g_id'];?>">Delete</a> </td>
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