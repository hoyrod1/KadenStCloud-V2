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
 * @link     https://kadenstcloud/index.php
 */
?>
<!-- NAVIGATION BAR-->
<div class="nav-link">
<nav>
<a href="index.php"><h4>St. Cloud's Registration System inc</h4></a>
<ul>
<?php  
if (logged_in_session()) {
    header("location: members/home.php");
    ?>

    <?php
} else {
    ?>
        <li>
            <a href="/home.php">Home</a>
        </li>
        <li>
            <a href="/about.php">About</a>
        </li>
        <li>
            <a href="/contact.php">Contact</a>
        </li>
        <li>
            <a href="/login.php">Login</a>
        </li>
        <li>
            <a href="/register.php">Register</a>
        </li>

    <?php
}
?>
</ul>
</nav>
</div>