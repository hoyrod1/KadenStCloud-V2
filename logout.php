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
 * @link     https://kadenstcloud/logout.php
 */
ob_start();
session_start();
require_once 'functions/config.php';
session_destroy();
if (isset($_COOKIE['Email'])) {
    unset($_COOKIE['Email']);
    setcookie('Email', '', time()-86400);
}
header("location:login.php");