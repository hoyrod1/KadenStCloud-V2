<?php  
ob_start();
session_start();
function title()
{
	return $title = "Activate Page";
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
							<h2 class="text-center py-2">Activate</h2>
					</div>
					<hr>
					<?php validate_code(); ?>
		 			<div class="card-body">
		 				<form method="POST">
		 					<input type="text" name="token" placeholder="########" class="form-control mb-2">
		 					<div class="card-footer">
		 						<button class=" btn btn-success" name="validate_code">Activate</button>
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