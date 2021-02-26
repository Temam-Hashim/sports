<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>


                    <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        User Edit Page</h3>
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
                                                <li><a href="user_new.php">Add New User</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->
                                </div>




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


<div class="inner-page-banner">

      <div  style="margin:auto;width:90%;padding:10px;background:#f0e68c">
        
      <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Update User </legend>
          <div class="form-group">
            <label for="team">User Name</label><span class="text-danger">*</span>
            <input type="test"  class="form-control" name="username" value="<?php echo $username_db;?>" required >
          </div>  
          <div class="form-group">
            <label for="team">Password</label></label><span class="text-danger">*</span>
            <input type="password"  class="form-control" name="password" value="<?php echo $password_db;?>" required>
          </div>  
       

          <div  style="margin:auto;width:50%;">
            <button type="submit" class="btn btn-primary" name="update">Update User</button>
          </div>    
        </form>  
</div>
 <!--  end your code here-->
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