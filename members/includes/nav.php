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
<?php  
if (loggedInSession()) {
    ?>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">St. Cloud's Registration System inc</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="members_home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members_update">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members_video">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members_pic">Pics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="../logout.php"> Log Out</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <?php
} else {
    header("location:../login.php");
}
?>