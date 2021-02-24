<?php
  header("Location:index.php");
  session_destroy();
  $_session['username']=='';
?>