<?php require_once "includes/header.php"; ?>
<?php
//insert contact form
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}
if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $message = $_POST['message'];

 
      $query = "INSERT INTO `contact`(`name`, `email`, `message`, `address`) VALUES ('$name','$email','$message','$address')";
      $result = mysqli_query($connect,$query);
      if($result){
         echo "<script>alert('Your Message Sent Successfully');</script>";
      }else{
         echo "<script>alert('Failed to send your Message make sure you entered correct email');</script>";

   }

}

?>
<style>
   .fm1{
      /* border: 5px solid blue; */
      border-color:coral;
      border-radius:12px;
   }
</style>

         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Contact</h3>
               <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Contact</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="contact">

                  <div class="col-md-6">
                     <div class="contact-info">
                        <div class="kode-section-title">
                           <h3>Contact Info</h3>

                        </div>
                        <div class="kode-forminfo">
                           <p>for any enquire please contact us on the given contact detail, click on the email to email us , for direct call click on the phone number provided, or send your query directly on page contact panel</p>
                           <ul class="kode-form-list">
                              <li>
                                 <i class="fa fa-home"></i> 
                                 <p><strong>Address:</strong> <a href="index.php" class="text-primary">KIIT UNIVERSITY,KP8 ,BOYS HOSTEL,2B-60</a></p>
                              </li>
                              <li>
                                 <i class="fa fa-phone"></i> 
                                 <p><strong>Phone:</strong> <a class="text-primary" href="tel://+91 63 09 81 41 95">63 09 81 41 95</a></p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope-o"></i> 
                                 <p><strong>Email:</strong> 
                                    <a class="text-primary" href = "mailto: temamhashim3@gmail.com?subject = VOLLEYBALL ENQUERY">temamhashim3@gmail.com</a> <br>
                                    <a class="text-primary" href = "mailto: kenawnuru@gmail.com?subject = VOLLEY BALL ENQUERY">kenawnuru@gmail.com</a>
                                 </p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
<!-- contact form -->
                  <div class="col-md-6">
                     <div class="contact-us">
                     
                     <form action="" method="POST" role="form">
                        <legend>Contact Us</legend>
                     
                        <div class="form-group">
                           <input type="text" class="form-control fm1" id="name" name="name" placeholder="Name:*" required>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control fm1" id="email" name="email" placeholder="Email:*" required>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control fm1" id="name" name="address" placeholder="address:optional">
                        </div>
                        <div class="form-group">
                           <textarea name="message" id="message" class="form-control fm1" rows="3" required="required" placeholder="Enter Your Message" ></textarea>                       
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" name="send">SEND</button>
                     </form>
                     

                     </div>
                  </div>
<!-- google map -->
                  <div class="col-md-12" style="margin-top:12px;padding:5px;">
                     <div class="map"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15584.708340930332!2d85.8214432637203!3d20.361249678083297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19093968e8f223%3A0xb1f53f5c74207ec3!2sKP-8%2C%20Campus%2011%20(Boy&#39;s%20Hostel)!5e0!3m2!1sen!2sin!4v1614068289497!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>
      
<?php require_once "includes/footer.php"; ?>