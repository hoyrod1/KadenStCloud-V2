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
 * @link     https://kadenstcloud/login.php
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
    return $title = "Login Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<body class="login-body">
<!------------------------------- BEGGINING OF BODY -------------------------------->
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION---------------------------->
<div class="main-container" style="overflow-x: hidden;">
<?php 
  loginValidation(); 
  displayMessage();
?>
<div class="login-container">
  <hr>
  <h1 class="login-h1">Login Page</h1>
    <div class="">
      <form class="log-form" method="POST">
          <input class="log-inp" type="text" name="Email" placeholder="Enter Email">
          <br>
          <input class="log-inp" type="password" name="Password" placeholder="Enter Password">
          <br>
          <button class="login-button" name="login_btn">
                Login
          </button>
        <div class="login-recover-remember">
        <a href="/recover.php" class="login-anchor">Forgot Password</a>
        <br>
        <input class="log-check" type="checkbox" name="remember"><span> Remember Me</span>
        </div>
      </div>
    </form>
</div>
<hr>
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