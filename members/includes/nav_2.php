<?php 
/**
 * * @file
 * php version 8.2
 * Index Page for KadenStCloud.com Registration-Login-APP
 * 
 * @category Registration_Login
 * @package  Index_Page
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://kadenstcloud/members/includes/nav.php
 */
?>
  <!-- NAVIGATION BAR-->
  <div class="nav-link">
    <nav>
      <a href="index.php">St. Cloud's Registration System inc</a>
      <ul>
          <?php  
            if (loggedInSession()) {
                ?>
                <li class="nav-item">
                    <a href="members_home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="members_update" class="nav-link">Update</a>
                </li>
                <li class="nav-item">
                    <a href="members_video" class="nav-link">Video</a>
                </li>
                <li class="nav-item">
                    <a href="members_Pic" class="nav-link">Pics</a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link" style="color: red;">
                        Log Out
                    </a>
                </li>
                <?php
            } else {
                header("location:../login.php");
            }
            ?>
      </ul>
    </nav>
  </div>