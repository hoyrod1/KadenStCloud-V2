<?php
/**
 * * @file
 * php version 8.2
 * Header File For KadenStCloud.com Registration-Login-APP
 * 
 * @category Registration_Login
 * @package  Header_File
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://kadenstcloud/reset.php
 */
ob_start();
session_start();
//=================================================================================//
/**
 * Function sets the page title
 * 
 * @access public  
 * 
 * @return string
 */
function title()
{
    return $title = "Reset Password Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<body>
<!------------------------------- BEGGINING OF BODY -------------------------------->
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION---------------------------->
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
                      <button class=" btn btn-success" name="update_password">
                          Update Password
                      </button>
                      <a href="login.php" class="btn btn-danger float-right">
                          login
                      </a>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!------------------------------ END OF MAIN SECTION ------------------------------>
<?php
//============================= BEGGINING OF FOOTER ===============================//
require_once "includes/footer.php";
//================================ END OF FOOTER ==================================//
?>
<!---------------------------------- END OF BODY ----------------------------------->
</body>
</html>