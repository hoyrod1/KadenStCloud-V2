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
 * @link     https://kadenstcloud/home.php
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
    return $title = "Home Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body class="home-body" style="overflow-x: hidden;">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!------------------------- BEGINNING OF CONTAINER SECTION ------------------------->
<hr>
<div class="home-container">
    <div class="container-h1">
        <h1 class="home-h1">Welcome to the Home page</h1>
    </div>
    <div class="container-reg-link">
        <h2 class="home-h2">
            If you haven't registered yet click on the link below
        </h2>
        <a class="home-anch-tag" href="register.php">Register</a>
    </div>
    <div class="container-login-link">
        <h2 class="home-h2">
            If you are already registered click on the link below
        </h2>
        <a class="home-anch-tag" href="login.php">Login</a>
    </div>
</div>
<hr>
<!---------------------------- END OF CONTAINER SECTION ---------------------------->
<?php
//============================= BEGGINING OF FOOTER ===============================//
require_once "includes/footer.php";
//================================ END OF FOOTER ==================================//
?>
<!---------------------------------- END OF BODY ----------------------------------->
</body>
</html>