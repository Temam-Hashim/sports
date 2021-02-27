<?php 
  
  include "includes/header.php"; 
  include "../includes/auth.php"; 
?>

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

                <div  class="myform">
                
                <form action="" method="POST"  enctype="multipart/form-data" role="form">
                    <legend class="text-info text-center"> Add New User</legend>

                    <div class="form-group">
                    <label for="team">User Name</label><span class="text-danger">*</span>
                    <input type="text" class="myinput form-control" name="username" >
                    </div>  
                    <div class="form-group">
                    <label for="team">Password</label><span class="text-danger">*</span>
                    <input type="password"  class="myinput form-control" name="password" >
                    </div>  
 

                        <div  style="margin:auto;width:50%;">
                            <button type="submit"  class="btn btn-primary" name="new_user">ADD NEW USER</button>
                        </div>    
                    </form>
                    </div>

 <!--  end your code here-->
  
                </div>
            </div>
          </div>
        </div>

<?php include "includes/footer.php"; ?>