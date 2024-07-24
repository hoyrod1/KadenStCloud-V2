<?php
ob_start();
session_start();
	
function title()
{
	return $title = "Home Page";
}
/**BEGINNING OF HEADER**/
require_once("includes/header.php");
?>
<!--END OF HEADER -->

<!----------------------------------------------------------------------------->


<!--BEGGINING OF NAVIGATION BAR-->
<?php  
require_once("includes/nav.php");
?>
<!--END OF NAVIGATION BAR -->

<!----------------------------------------------------------------------------->

<!----------------------------------------------------------------------------->
<!--BEGGINING OF BODY-->
<div class="container mt-3">
		<div class="card">
		 	<div class="card-body">
		 		<h2 class="text-center">Welcome to the Home page</h2>
		 	</div>
		</div>
</div>
<div class="container mt-3">
		<div class="card">
		 	<div class="card-body">
		 		<h3 class="text-center">If you haven't registered yet click on the link: <a href="register.php">Register</a></h3>
		 	</div>
		</div>
</div>
<div class="container mt-3">
		<div class="card">
		 	<div class="card-body">
		 		<h3 class="text-center">If you are already registered click on the link: <a href="login.php">Login</a></h3>
		 	</div>
		</div>
</div>
<!--END OF BODY-->

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!--BEGGINING OF FOOTER-->
<?php  
require_once("includes/footer.php");
?>
<!--END OF FOOTER -->

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->