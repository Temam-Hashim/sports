<?php 
   ob_start();
   session_start();
   include "../includes/auth.php";
   require_once "../includes/db.php"; 
  //  require_once 'function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    T-Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/e2d0e0485e.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <!-- <div class="logo"><a href="#" class="simple-text logo-normal">
          Creative Tim
        </a></div> -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="player.php">
              <i class="material-icons">person</i>
              <p>Player</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="team.php">
              <i class="material-icons">content_paste</i>
              <p>Team</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="match.php">
              <i class="material-icons">bubble_chart</i>
              <p>Matchs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="result.php">
              <i class="material-icons">content_paste</i>
              <p>Result</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="gallery.php">
              <i class="material-icons">location_ons</i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tables.php">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="typography.php">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="icons.php">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="rtl.php">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->

        </ul>
      </div>
    </div>
    <?php include "includes/nav.php"?>