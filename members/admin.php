<?php
ob_start();
session_start();
	function title()
{
	return $title = "Members Admin Page";
}
/***BEGINNING OF HEADER***/
require_once("includes/header.php");
?>
<!--END OF HEADER -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--BEGGINING OF NAVIGATION BAR-->
<?php
require_once("includes/nav.php");
?>
<!--END OF NAVIGATION BAR -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-- MAIN SECTION-->
	<div class="container mt-3">
		<div class="card">
		 	<div class="card-body">
		 		<h2 class="text-center">
		 			<?php  
		 				if (logged_in_session()) 
		 				{
			 				echo "Welcome to the Memebers Admin page";
		 				}else
		 				{
		 					header("location:login.php");
		 				}
		 			?>
		 		</h2>
		 	</div>
		</div>
	</div>
<!--END OF MAIN SECTION-->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--BEGGINING OF FOOTER-->
<?php  
require_once("includes/footer.php");
?>
<!--END OF FOOTER -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->