<?php  
ob_start();
session_start();
function title()
{
	return $title = "Reset Password Page";
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
<!--------------------------------------------------------------------------=-->
<!--BEGGINING OF MAIN SECTION-->
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto">
				<div class="card mt-5">
					<div class="card-title">
							<h2 class="text-center py-2">Reset Password</h2>
					</div>
					<hr>
					<?php reset_password(); ?>
		 			<div class="card-body">
		 				<form method="POST">
		 					<input type="password" name="password" placeholder="Enter Password" class="form-control mb-2">
		 					<input type="password" name="confirm_password" placeholder="Re-enter Password" class="form-control mb-2">
		 					<input type="hidden" name="password_token" value="<?php echo token_generator(); ?>">
		 					<div class="card-footer">
		 						<button class=" btn btn-success" name="update_password">Update Password</button>
		 						<a href="login.php" class="btn btn-danger float-right">login</a>
		 					</div>
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