<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>






<!-- get all the data of player to be edited inside input box -->
<?php
    if(isset($_GET['edit_key'])){
      $user_id = $_GET['edit_key'];

      $query = "SELECT * FROM `login` WHERE `id`=$user_id";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_array($result);

      $username_db = $row['username'];
      $password_db = $row['password'];
    }
?>
   <!-- your code here -->
<?php
if(isset($_POST['update'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "UPDATE  `login` SET 
              `username`='$username', `password`='$password' WHERE `id`=$user_id";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('User Updated Successfully');</script>";
         header("Location:user.php");
      }else{
         echo "<script>alert('Result update  Failed please try again');</script>";
        //  echo mysqli_error($connect);

   }

}

?>


<style>
    .myinput{
      border: solid 2px skyblue;
      border-radius:5px;
      margin-bottom:20px;

    }
      .myform{
        margin:auto;
        width:90%;
        padding:22px;

    
    }
  </style>

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

                <div class="myform">
                    
                        <form action="" method="POST"  enctype="multipart/form-data" role="form">
                            <legend class="text-info text-center"> Update User </legend>
                            <div class="form-group">
                                <label for="team">User Name</label><span class="text-danger">*</span>
                                <input type="test"  class="myinput form-control" name="username" value="<?php echo $username_db;?>" required >
                            </div>  
                            <div class="form-group">
                                <label for="team">Password</label></label><span class="text-danger">*</span>
                                <input type="password"  class="myinput form-control" name="password" value="<?php echo $password_db;?>" required>
                            </div>  
                        

                            <div  style="margin:auto;width:50%;">
                                <button type="submit" class="btn btn-primary" name="update">Update User</button>
                            </div>    
                            </form>  
                </div>
 <!--  end your code here-->
                              
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

<?php include "includes/footer.php"; ?>