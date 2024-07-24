<?php
ob_start();
session_start();
	
function title()
{
	return $title = "Login Page";
}
/***BEGINNING OF HEADER***/
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
							<h2 class="text-center py-2">Login Page</h2>
						</div>
						<hr>
						<?php 
							login_validation(); 
							display_message();
						?>
		 				<div class="card-body">
		 					<form method="POST">
		 						<input type="text" name="Email" placeholder="Enter Email" class="form-control mb-2">
		 						<input type="password" name="Password" placeholder="Enter Password" class="form-control mb-2">

		 						<button class=" btn btn-success mt-2 float-right" name="login_btn">Login</button>
		 				</div>
		 						<div class="card-footer">
		 							<a href="/recover.php" class="float-right">Forgot Password</a>
		 							<input type="checkbox" name="remember"><span> Remember Me</span>
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