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
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body class="recover-body" style="overflow-x: hidden;">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION---------------------------->
<div class="recover-main-container">
<div class="response-text">
<?php 
    recoverPassword();
    displayMessage(); 
?>
</div>
<hr>
<div class="recover-container">
  <h1 class="recover-h1">Recover Your Password</h1>
    <div class="">
        <form class="rec-form" method="POST">
            <input type="text" name="email" placeholder="Please enter or email" class="rec-inp">
            <input type="hidden" name="token_gen" value="<?php echo tokenGenerator(); ?>">
            <br />
            <button class="recover-button" name="recover">
                Recover Password
            </button>
            <div class="rec-login">
                Remember password: &nbsp; <a href="login.php" class="rec-login-anchor">login</a>
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