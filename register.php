<?php require_once "includes/header.php"; ?> 
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
if(isset($_POST['register'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $position = $_POST['position'];
   $dept = $_POST['dept'];
   $team = $_POST['team'];

   
  $profile = $_FILES['avatar']['name'];
  $profile_temp = $_FILES['avatar']['tmp_name'];
  move_uploaded_file($profile_temp,"uploads/".$profile);

  
  // move_uploaded_file($_FILES['avatar']['tmp_name'],__DIR__."/uploads/".$_FILES['avatar']['name']);

 
      $query = "INSERT INTO `player`(`player_name`, `player_position`, `player_dept`, `player_team`, `player_image`, `player_email`, `player_mobile`) 
                VALUES ('$name','$position','$dept','$team','$profile','$email','$mobile')";

      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Your are Registered Successfully');</script>";
      }else{
         echo "<script>alert(' your Registeration Failed please try again');</script>";

   }

}

?>


<div class="inner-page-banner">
            <div class="container">
            </div>
         </div>

         <div class="inner-information-text">
            <div class="container">
               <h3>REGISTER</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Register</li>
               </ul>
            </div>
         </div>
      </section>

   
      
        
        <form action="" method="POST"  enctype="multipart/form-data" role="form">
          <legend class="text-info text-center"> Volleyball Registration Form 2021 </legend>

          <div  style="margin:auto;width:50%;padding:10px;background:#f0e68c">
          <div class="form-group">
            <label for="name">FULL NAME</label><span class="text-danger">*</span>
            <input type="text" class="myinput form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="email">EMAIL</label><span class="text-danger">*</span>
            <input type="text" class="myinput form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="mobile">Mobile</label><span class="text-danger">*</span>
            <input type="text" class="myinput form-control" id="mobile" name="mobile" placeholder="Mobile" required>
          </div>
          <div class="form-group">
            <label for="avatar">Profile Picture</label><span class="text-danger">*</span>
            <input type="file" accept="image/*" class="myinput form-control" name="avatar" id="avatar" >
            <small color="red">.jfif or media image is not accepted</small>
          </div>
          <div class="form-group">
            <label for="position">Postion</label><span class="text-danger">*</span>
            <select  class="myinput form-control" name="position" id="position" required>
              <option value="Setter">Setter</option>
              <option value="Outside Hitter">Outside Hitter</option>
              <option value="Opposite Hitter">Opposite Hitter</option>
              <option value="Middle Blocker">Middle Blocker</option>
              <option value="Libro">Libero</option>
              <option value="Defensive Specialist">Defensive Specialist</option>
              <option value="unknown">UnKnown</option>
            </select>
          </div>

          <div class="form-group">
            <label for="mobile">Department</label><span class="text-danger">*</span>
            <select class="myinput form-control" name="dept" id="dept" required>
              <option value="CE">CE</option>
              <option value="CSE">CSE</option>
              <option value="ECS">ECS</option>
              <option value="EE">EEE</option>
              <option value="ETC">ETC</option>
              <option value="EE">EE</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="team">Team</label><span class="text-danger">*</span>
            <select class="myinput form-control" name="team" id="team" required>
              <option value="CE&ETC">CE & ETC</option>
              <option value="CSE&ME">CSE & ME</option>
              <option value="ECS">ECS</option>
              <option value="EEE">EEE</option>
              <option value="none">Not Assigned</option>
            </select>
          </div>  
                
</div>
          
          <div  style="margin:auto;width:50%;">
            <button type="submit" class="btn btn-primary-lg" name="register">REGISTER</button>
          </div>    
        </form>


<?php require_once "includes/footer.php"; ?>