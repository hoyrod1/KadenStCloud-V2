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
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body class="reset-body" style="overflow-x: hidden;">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION---------------------------->
<div class="reset-main-container">
<hr>
<div class="reset-container">
  <h1 class="reset-h1">Reset Your Password</h1>
    <?php resetPassword(); ?>
    <div class="">
        <form class="res-form" method="POST">
            <input type="password" name="password" placeholder="Enter Password" class="res-inp">
            <input type="password" name="confirm_password" placeholder="Re-enter Password" class="res-inp">
            <input type="hidden" name="password_token" value="<?php echo tokenGenerator(); ?>">
            <br />
            <button class="reset-button" name="update_password">
                Update Password
            </button>
            <div class="res-login">
                Remember password: &nbsp; 
                <a href="login.php" class="login-anchor">login</a>
            </div>
        </form>
    </div>
    <hr>
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