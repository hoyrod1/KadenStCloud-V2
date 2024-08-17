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
    <h1 class="mem-admin-h1"> Welcome to the Members Admin Video-Chat Page</h1>
    <div class="container row">
      <div class="videos col-8">
        <div>
          <h3>My feed</h3>
          <video id="my-video" class="video" autoplay playsinline></video>
        </div>
        <div>
          <h3>Their feed</h3>
          <video id="other-video" class="video" autoplay playsinline></video>
        </div>
      </div>
      <div class="buttons col-4">
        <button id="share" class="btn btn-primary d-block mb-1">
          Share my mic and camera
        </button>
        <button id="show-video" class="btn btn-secondary d-block mb-1">
          Show My Video
        </button>
        <button id="stop-video" class="btn btn-secondary d-block mb-1">
          Stop My Video
        </button>
        <div class="mb-1">
          <button id="change-size" class="btn btn-secondary mb-1">
            Change screen size
          </button>
          <input type="text" id="vid-width" value="1280" />
          <input type="text" id="vid-height" value="720" />
        </div>
        <div class="mb-1">
          <button id="start-record" class="btn btn-secondary mb-1">
            Start recording
          </button>
          <button id="stop-record" class="btn btn-secondary mb-1">
            Stop Recording
          </button>
          <button id="play-record" class="btn btn-secondary mb-1">
            Play Recording
          </button>
        </div>
        <button id="share-screen" class="btn btn-secondary d-block mb-1">
          Share Screen
        </button>
        <button id="make-offer" class="btn btn-secondary d-block mb-1">
          Make An Offer
        </button>
        <button id="accept-offer" class="btn btn-secondary d-block mb-1">
          Accept Offer / Make Answer
        </button>
        <button id="show-video" class="btn btn-secondary d-block mb-1">
          Show Other Video
        </button>
        <br />
        <div>
          <label>Select video input: </label>
          <select id="video-input"></select>
        </div>
        <br />
        <div>
          <label>Select audio input: </label>
          <select id="audio-input"></select>
        </div>
        <br />
        <div>
          <label>Select audio output: </label>
          <select id="audio-output"></select>
        </div>
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