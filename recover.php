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
 * @link     https://kadenstcloud/recover.php
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
    return $title = "Recover Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<body style="overflow-x: hidden;">
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
            <h2 class="text-center py-2">Recover Password</h2>
          </div>
          <?php 
              recoverPassword();
              displayMessage(); 
            ?>
          <hr>
          <div class="card-body">
            <form method="POST">
              <input type="text" name="email" placeholder="Please enter or email" class="form-control mb-2">
              <input type="hidden" name="token_gen" value="<?php echo tokenGenerator(); ?>">
              <div class="card-footer">
                 <button class=" btn btn-success" name="recover">
                     Recover Password
                 </button>
                 <a href="login.php" class="btn btn-danger float-right">login</a>
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