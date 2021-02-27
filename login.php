<?php  
include "includes/header.php";

?> 
<style>
     /* .center {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background: #f0e68c;
    } */
  .myinput{
    border: 3px solid skyblue;
    border-radius:7px;
  }

</style> 
<?php
if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];


  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
      $result = mysqli_query($connect,$query);
      $row = mysqli_fetch_array($result);
      //fetch username and password from db
      $db_username = $row['username'];
      $db_password = $row['password'];

      if($db_username == $username && $db_password==$password){
        $_SESSION['username'] = $db_username;
        header("location:T-Admin/index.php");
      }else{
        echo "<script>alert('Login Failed. Incorrect Username or password');</script>";
        echo mysqli_error($connect);
      }


}

?>


<div class="inner-page-banner">
            <div class="container">
            </div>
         </div>

         <div class="inner-information-text">
            <div class="container">
               <h3>Login</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Login</li>
               </ul>
            </div>
         </div>
      </section>

   
     
        
        <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Admin Login Page </legend>
          <marquee><h5 class="text-info">contact admin for login credetial</h5></marquee>
          <div  style="margin:auto;width:50%;padding:10px;background:#f0e68c">
          <div class="form-group">
            <label for="email">User Name</label><span class="text-danger">*</span>
            <input type="text" class="myinput form-control" id="username" name="username" placeholder="username" required>
          </div>

          <div class="form-group">
            <label for="email">Password</label><span class="text-danger">*</span>
            <input type="password" class="myinput form-control" id="password" name="password" placeholder="password" required>
          </div>

          </div>
            <div style="margin:auto; width:50%">
              <button type="submit" class="btn btn-primary btn-lg" name="login" tyle="margin:20px;">Login</button> 
            </div>
        </form>      






<?php require_once "includes/footer.php"; ?>