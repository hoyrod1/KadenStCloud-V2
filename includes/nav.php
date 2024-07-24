<?php 

?>
<!-- NAVIGATION BAR-->
<nav class="navbar navbar-expand navbar-light bg-white">
<div class="container">
<a href="index" class="navbar-brand"><h3>St. Cloud's Registration System inc</h3></a>
<ul class="navbar-nav">
<?php  
if (logged_in_session()) {
    header("location: members/home.php");
    ?>

    <?php
} else {
    ?>
<li class="nav-item">
<a href="/home.php" class="nav-link">Home</a>
</li>
<li class="nav-item">
<a href="/about.php" class="nav-link">About</a>
</li>
<li class="nav-item">
<a href="/contact.php" class="nav-link">Contact</a>
</li>
<li class="nav-item">
<a href="/login.php" class="nav-link">Login</a>
</li>
<li class="nav-item">
<a href="/register.php" class="nav-link">Register</a>
</li>

    <?php
}
?>
</ul>
</div>
</nav>