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
 * @link     https://kadenstcloud/register.php
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
    return $title = "Register Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<body class="reg-body" style="overflow-x: hidden;">
<!------------------------------- BEGGINING OF BODY -------------------------------->
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION --------------------------->
<div class="reg-main-container">
<div class="response-text">
  <?php formValidation(); ?>
</div>
  <div class="reg-container">
  <hr>
  <h1 class="reg-h1">Registration Page</h1>
    <div class="">
      <form class="reg-form" method="POST">
          <input class="reg-inp" type="text" name="first_name" placeholder="Enter First Name">
          <br>
          <input class="reg-inp" type="text" name="last_name" placeholder="Enter Last Name">
          <br>
          <input class="reg-inp" type="text" name="username" placeholder="Enter Username">
          <br>
          <input class="reg-inp" type="email" name="Email" placeholder="Enter Email">
          <br>
          <input class="reg-inp" type="password" name="Password" placeholder="Enter Password">
          <br>
          <input class="reg-inp" type="password" name="confirm_password" placeholder="Re-Enter Password">
          <br>
          <button class="reg-button" name="signup">
                Sign Up
          </button>
        <div class="already-member">
            Already Registered: <a href="/login.php" class="reg-anchor">Login</a>
        </div>
      </div>
    </form>
    <hr>
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