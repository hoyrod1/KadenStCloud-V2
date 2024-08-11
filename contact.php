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
 * @link     https://kadenstcloud/contact.php
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
    return $title = "Contact Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body class="about-body" style="overflow-x: hidden;">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION---------------------------->
<div class="main-about">
    <hr>
    <div class="container-about-h1">
        <h1 class="about-h1">Welcome to the Contact page</h1>
    </div>
    <div class="container-about-paragraph">
        <p class="about-paragraph">
            If you would like to contact us in regards to Kaden St. Cloud's 
            web site please email us @ hoyrod1@aol.com and don't forget to 
            register if you have not done so already.
            <br/>
            <br/>
            Thank you
        </p>
    </div>
    <div class="about-reg-link">
        <h2 class="about-h2">
            If you haven't registered yet click on the link below
        </h2>
        <a class="about-anch-tag" href="register.php">Register</a>
    </div>
    <div class="about-login-link">
        <h2 class="about-h2">
            If you are already registered click on the link below
        </h2>
        <a class="about-anch-tag" href="login.php">Login</a>
    </div>
    <hr>
</div>
<?php
//============================= BEGGINING OF FOOTER ===============================//
require_once "includes/footer.php";
//================================ END OF FOOTER ==================================//
?>
<!---------------------------------- END OF BODY ----------------------------------->
</body>
</html>