        
          <?php
        //   number of player
            $query = "SELECT * FROM player";
            $result = mysqli_query($connect,$query);
            $player_count = mysqli_num_rows($result);
            //   number of match
            $match_query = "SELECT * FROM `match` where `match_status`='upcoming'";
            $match_result = mysqli_query($connect,$match_query);
            $match_count = mysqli_num_rows($match_result);
            //   number of match
            $team_query = "SELECT * FROM `team`";
            $team_result = mysqli_query($connect,$team_query);
            $team_count = mysqli_num_rows($team_result);
            //   number of match
            $res_query = "SELECT * FROM `results`";
            $res_result = mysqli_query($connect,$res_query);
            $res_count = mysqli_num_rows($res_result);
            //   number of match
            $user_query = "SELECT * FROM `login`";
            $user_result = mysqli_query($connect,$user_query);
            $user_count = mysqli_num_rows($user_result);
        ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
  
                            <ul class="widget widget-menu unstyled">
                                <li><a href="player.php"><i class="menu-icon icon-bold"></i>Players <b class="label green pull-right">
                                  <?php echo $player_count;?></b> </a></li>
                                  <li><a href="match.php"><i class="menu-icon icon-book"></i>matchs <b class="label green pull-right">
                                  <?php echo $match_count;?></b> </a></li>
                                  <li><a href="team.php"><i class="menu-icon icon-paste"></i>Team <b class="label green pull-right">
                                  <?php echo $team_count;?></b> </a></li>
                                  <li><a href="result.php"><i class="menu-icon icon-paste"></i>Result <b class="label green pull-right">
                                  <?php echo $res_count;?></b> </a></li>
                                  <li><a href="user.php"><i class="menu-icon icon-paste"></i>User <b class="label green pull-right">
                                  <?php echo $user_count;?></b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <!-- <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul> -->
                                </li>
                                <li><a href="../logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>