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
 * @link     https://kadenstcloud/members/video.php
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
    return $title = "Members Video Page";
}
//=================================================================================//
//============================== BEGINNING OF HEADER ==============================//
require_once "includes/header.php";
//=============================== ENDING OF HEADER ================================//
?>
<!------------------------------- BEGGINING OF BODY -------------------------------->
<body class="mem-video-body">
<?php
//========================= BEGGINING OF NAVIGATION BAR ===========================//
require_once "includes/nav.php";
//============================ END OF NAVIGATION BAR ==============================//
?>
<!------------------------- BEGINNING OF MAIN SECTION ------------------------->
<div class="mem-video-container">
    <h1 class="mem-video-h1"> Welcome to the Members Video Page</h1>
    <div class="row mb-3 mt-3 justify-content-md-center">
        <div id="user-name"></div>
        <button id="call" class="btn btn-primary col-1">Call!</button>
        <button id="hangup" class="col-1" class="btn btn-primary">Hangup</button>
        <div id="answer" class="col"></div>
    </div>
    <div id="videos">
        <div id="video-wrapper">
          <div id="waiting" class="btn btn-warning">Waiting for answer...</div>
          <video class="video-player" id="local-video" autoplay playsinline controls>

          </video>
        </div>
        <video class="video-player" id="remote-video" autoplay playsinline controls>

        </video>
    </div>
</div>
<!---------------------------- END OF MAIN SECTION ---------------------------->
<?php
//============================= BEGGINING OF FOOTER ===============================//
require_once "includes/footer.php";
//================================ END OF FOOTER ==================================//
?>
<!---------------------------------- END OF BODY ----------------------------------->
</body>
<!-- <script src="/socket.io/socket.io.js"></script> -->
<script src='javascript/video_chat_javascript/peer_scripts.js'></script>
</html>