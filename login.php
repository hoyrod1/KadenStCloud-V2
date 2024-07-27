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
<body>
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
             <h2 class="text-center py-2">Login Page</h2>
          </div>
          <hr>
          <?php 
            loginValidation(); 
            displayMessage();
            ?>
          <div class="card-body">
            <form method="POST">
                <input type="text" name="Email" placeholder="Enter Email" class="form-control mb-2">
                <input type="password" name="Password" placeholder="Enter Password" class="form-control mb-2">
                <button class=" btn btn-success mt-2 float-right" name="login_btn">
                     Login
                </button>
          </div>
          <div class="card-footer">
              <a href="/recover.php" class="float-right">Forgot Password</a>
              <input type="checkbox" name="remember"><span> Remember Me</span>
              </div>
            </form>
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