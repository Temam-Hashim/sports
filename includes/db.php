<?php
///local server
  $username = "root";
  $password="";
  $db="sports";
  $host = "localhost";
  $connect = mysqli_connect($host,$username,$password,$db);


///remote server
 $username = "bPWeE5vC1C";
 $password="k9uS8mkZn8";
 $db="bPWeE5vC1C";
 $host = "remotemysql.com";
 $port = 3306;
 $connect = mysqli_connect($host,$username,$password,$db,$port);

?>