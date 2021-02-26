<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
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
<!-- 
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
                                    </div> -->
                                </div>

   <!-- your code here -->
<?php
if(isset($_POST['new_user'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
  

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "INSERT INTO `login`(`username`, `password`) 
                VALUES ('$username','$password')";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('User Added Successfully');</script>";
         header("Location:user.php");
      }else{
         echo "<script>alert('user Adding Failed please try again');</script>";
        //  echo mysqli_error($connect);

   }

}

?>


<div class="inner-page-banner">

      <div  style="margin:auto;width:90%;padding:10px;background:#f0e68c">
        
        <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Add New User</legend>

          <div class="form-group">
            <label for="team">User Name</label><span class="text-danger">*</span>
            <input type="text" class="form-control" name="username" >
          </div>  
          <div class="form-group">
            <label for="team">Password</label><span class="text-danger">*</span>
            <input type="password"  class="form-control" name="password" >
          </div>  
 

          <div  style="margin:auto;width:50%;">
            <button type="submit"  class="btn btn-primary" name="new_user">ADD NEW USER</button>
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