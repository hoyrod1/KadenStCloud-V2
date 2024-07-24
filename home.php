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
<body>
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!------------------------- BEGINNING OF CONTAINER SECTION ------------------------->
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Welcome to the Home page</h2>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">
                    If you haven't registered yet click on the link: 
                    <a href="register.php">Register</a>
                </h3>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">
                    If you are already registered click on the link: 
                    <a href="login.php">Login</a></h3>
            </div>
        </div>
    </div>
<!---------------------------- END OF CONTAINER SECTION ---------------------------->
<?php
//============================= BEGGINING OF FOOTER ===============================//
require_once "includes/footer.php";
//================================ END OF FOOTER ==================================//
?>
<!---------------------------------- END OF BODY ----------------------------------->
</body>
</html>