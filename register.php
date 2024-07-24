<?php  
ob_start();
session_start();

function title()
{
	return $title = "Register Page";
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
<!--BEGGINING OF MAIN SECTION-->

	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
							<h2 class="text-center py-1">Registration Page</h2>
					</div>
					<hr>
					<?php form_validation(); ?>
		 			<div class="card-body">
		 				<form action="" method="POST">
		 					<input type="text" name="first_name" placeholder="Enter First Name" class="form-control mb-2">
		 					<input type="text" name="last_name" placeholder="Enter Last Name" class="form-control mb-2">
		 					<input type="text" name="username" placeholder="Enter Username" class="form-control mb-2">
		 					<input type="email" name="email" placeholder="Enter Email" class="form-control mb-2">
		 					<input type="password" name="password" placeholder="Enter Password" class="form-control mb-2">
		 					<input type="password" name="confirm_password" placeholder="Re-Enter Password" class="form-control mb-2">
		 					<button name="signup" class=" btn btn-success mt-2 float-right">Sign Up</button>
		 				</form>	
		 			</div>
				</div>
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