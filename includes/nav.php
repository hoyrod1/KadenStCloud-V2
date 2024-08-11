<?php 
/**
 * * @file
 * php version 8.2
 * Index Page for KadenStCloud.com Registration-Login-APP
 * 
 * @category Registration_Login
 * @package  Nav_Page
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://kadenstcloud/includes/nav.php
 */
?>
    <!-- ---------------------BEGINNING OF HEADER SECTION------------------------ -->
    <header class="header">
    <a class="main-nav-link" href="index.php">
        <h4>St. Cloud's Registration System inc</h4>
    </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
            <?php  
            if (loggedInSession()) {
                header("location: members/home.php");

            } else {
                ?>
                    <li>
                        <a class="main-nav-link" href="/home.php">Home</a>
                    </li>
                    <li>
                        <a class="main-nav-link" href="/about.php">About</a>
                    </li>
                    <li>
                        <a class="main-nav-link" href="/contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="main-nav-link" href="/login.php">Login</a>
                    </li>
                    <li>
                        <a class="main-nav-link" href="/register.php">Register</a>
                    </li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <button class="btn-mobil-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline">

        </ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline">

        </ion-icon>
    </button>
    </header>