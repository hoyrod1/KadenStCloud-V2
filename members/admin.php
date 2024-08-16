<?php
/**
 * * @file
 * php version 8.2
 * Config File For KadenStCloud.com Registration-Login-APP
 * 
 * @category Registration_Login
 * @package  Admin_File
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://kadenstcloud/members/admin.php
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
    return $title = "Members Admin Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body class="mem-admin-body">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!------------------------- BEGINNING OF CONTAINER SECTION ------------------------->
<div class="mem-admin-container">
    <h1 class="mem-admin-h1"> Welcome to the Members Admin Page</h1>
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