<?php
/**
 * * @file
 * php version 8.2
 * Index Page for KadenStCloud.com Registration-Login-APP
 * 
 * @category Registration_Login
 * @package  Index_Page
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://kadenstcloud/index.php
 */
ob_start();
session_start();

/**
 * Retrurns the name of the title
 *
 * @return string
 */
function title() 
{
    $title = "Login & Registration System";
    return $title;
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body>
<div class="main">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
// require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!---------------------------- BEGGINING OF MAIN SECTION---------------------------->
<div class="container">
  <br>
  <br>
  <div>
     <div class="container2">
        <h3>Kaden St. Cloud's Registration Page</h3>
        <div class="button-div">
            <a class="anch-tag" href="/home.php">
                Click here to enter his world
            </a>
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