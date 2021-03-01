

<?php 
  include "includes/header.php";
  include "../includes/auth.php";
?>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Profile</h4>   
                </div>
                  <div class="card-body">
                    <div class="content">
                    <div class="container-fluid">
                      <div class="row">

                          <!-- side page -->
                          <div class="col-lg-3 col-md-8 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                            <a href="player.php">
                              <div class="card-icon">
                                <i class="fa fa-user fa-8x"></i>
                              </div>
                              
                              <h3 class="card-title">User </h3>
                            </div>
                            </a>
                            <div class="card-footer">
                    
                            </div>
                          </div>
                        </div>
                                        <!-- detail -->
                          <div class="col-lg-3 col-md-8 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                           
                            <div class="card-footer">
                     
                            <h3 class="card-title"> <?php echo $_SESSION['username']; ?> </h3>
                            </div>
                          </div>
                        </div>

                   </div>
                </div>
              </div>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 <?php 
  include "includes/footer.php";

?>