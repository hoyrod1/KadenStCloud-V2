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
 * @link     https://kadenstcloud/functions/function.php
 */
//================================================================================//
//************** BEGINNING OF FUNCTION FOR ACTIVATION OF NEW MEMBER **************//
/**
 * This function handles member activation by email
 * 
 * @access public  
 * 
 * @return void
 */
function accountActivate()
{
    if (isset($_GET['email']) && isset($_GET['code'])) {
        $get_email       = $_GET['email'];
        $get_code        = $_GET['code'];

        $connect         = new Db();
        $query           = "SELECT * FROM members WHERE email = '$get_email' AND validate_mem = '$get_code'";
        $results = $connect->conn()->query($query);
        // $acc_act_results->bindValue(':get_Email', $get_email);
        // $acc_act_results->bindValue(':get_Code', $get_code);
        // $results         = $acc_act_results->execute();
        $results_fetch = $results->fetch();
        //print_r($results_fetch);
        if ($results_fetch) {
            //echo "GO TO THE NEXT STEP!!!";
            $update_conn  = new Db;
            $update_query = "UPDATE members SET validate_mem = 0, active_members = 1 WHERE email = '$get_email' AND validate_mem = '$get_code'";
            $pre_update   = $update_conn->conn()->prepare($update_query);
            // $pre_update->bindValue(':Get_Email', $get_email);
            // $pre_update->bindValue(':Get_Code', $get_code);
            $pre_update->execute();

            if ($pre_update) {
                echo '<div class="alert alert-success"> Your account has been activated!!! &nbsp <a href="/login.php">Please click here to login</a></div>';
            } else {
                echo '<div class="alert alert-danger"> Something went wrong!!! </div>';
            }
        }
    }
}
//***************** END OF FUNCTION FOR ACTIVATION OF NEW MEMBER *****************//
//================================================================================//

//=====================================================================//
/**
 * This function returns a error message
 * 
 * @param string $error 
 * 
 * @access public  
 * 
 * @return mixed
 */
function displayError($error)
{
    return '<div class="alert alert-danger">'.$error.'</div>';
}
//=====================================================================//

//=====================================================================//
/**
 * This function displays a session message
 * 
 * @access public  
 * 
 * @return mixed
 */
function displayMessage() 
{
    if (isset($_SESSION['message'])) {

        echo  $_SESSION['message'];
        unset($_SESSION['message']);

    }
}
//=====================================================================//

//===============================================================================//
/**
 * This funtion returns boolean if the email exist or not
 * 
 * @param string $eMail This param has the email submitted
 * 
 * @access public
 * 
 * @return boolean
 */
function emailExist($eMail) 
{
    $conn          = new Db;
    $email_query   = "SELECT * FROM members WHERE email = '$eMail'";
    $email_results = $conn->conn()->query($email_query);

    if ($email_results->fetch()) {
        return true;
    } else {
        return false;
    }
}
//===============================================================================//

//===============================================================================//
//********* BEGINNING OF FUNCTION FOR REGISTRATION FORM VALIDATION **************//
/**
 * This function handles form validation
 * 
 * @access public  
 * 
 * @return void
 */
function formValidation()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
        $first_name       = testInput($_POST['first_name']);
        $last_name        = testInput($_POST['last_name']);
        $user_name        = testInput($_POST['username']);
        $email            = testInput($_POST['email']);
        $pass_word        = testInput($_POST['password']);
        $confirm_password = testInput($_POST['confirm_password']);

        //CREATE AN EMPTY ARRAY FOR ERROR MESSAGE
        $error = [];
        //CHECK FOR EMPTY FIELDS
        if (empty($first_name) || empty($last_name) || empty($user_name) || empty($email) || empty($pass_word) || empty($confirm_password)) {
            $error[] = 'Please fill In The Empty Fields!';
        }
        //CHECK FIRST NAME CHARACTERS
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            $error[] = 'Please only enter letters in your fist name!';
        }
        //CHECK LAST NAME CHARACTERS
        if (!preg_match("/^[a-zA-Z. ]*$/", $last_name)) {
            $error[] = 'Please only enter letters in your last name!';
        }
        //CHECK USERNAME CHARACTERS
        if (!preg_match("/^[a-zA-Z,0-9_]*$/", $user_name)) {
            $error[] = 'Please only enter letters and numbers for your username!';
        }
        //CHECK TO SEE IF USERNAME EXOST
        if (usernameExist($user_name)) {
            $error[] = 'Username already exist!';
        }
        //CHECK FOR VALID EMAIL
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = 'Please enter valid email!';
        }
        //CHECK TO SEE IF EMAIL EXOST
        if (emailExist($email)) {
            $error[] = 'Email already exist!';
        }
        //CHECK PASSWORD CHARACTERS
        if (!preg_match("/^[a-zA-Z,0-9_]*$/", $pass_word)) {
            $error[] = 'Please only enter letters and numbers for your passowrd!';
        }
        //CHECK TO SEE IF PASSWORD MATCHES
        if ($pass_word !== $confirm_password) {
            $error[] = 'Passwords do not match!';
        }
        //CHECK TO SEE IF ERROR ARRAY IS NOT EMPTY
        if (!empty($error)) {
            foreach ($error as $display) {
                echo displayError($display);
            }
        } else {
            userRegistration($first_name, $last_name, $user_name, $email, $pass_word);
        }
    }
}
//************* END OF FUNCTION FOR REGISTRATION FORM VALIDATION *****************//
//================================================================================//

//================================================================================//
//************* BEGINNING FUNCTION TO START LOGIN GLOBAL SESSION *****************//
//================================================================================//
/**
 * This function if start the user session
 * 
 * @access public  
 * 
 * @return boolean
 */
function loggedInSession()
{
    if (isset($_SESSION['Email']) || isset($_COOKIE['Email'])) {
        return true;
    } else {
        return false;
    }
}
//**************** ENDING FUNCTION TO END LOGIN GLOBAL SESSION *******************//
//================================================================================//

//================================================================================//
//****************** BEGINNING FUNCTION FOR LOGIN VALIDATION *********************//
//================================================================================//
/**
 * This function handles login form validation
 * 
 * @access public  
 * 
 * @return void
 */
function loginValidation()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_btn'])) {
        $email      = testInput($_POST['Email']);
        $pass_word  = testInput($_POST['Password']);
        $rememberMe   = isset($_POST['remember']);
        // DECLARE $ERROR ARRAY
        $error = [];
        //CHECK IF EMAIL FEILD IS EMPTY
        if (empty($email)) {
            $error[] = 'Please Fill In Your Email!!!';
        }
        //CHECK CHARACTERS IN EMAIL FIELD 
        if (!preg_match("/[a-zA-Z0-9._]{3,}@[a-zA-Z0-9._]{3,}.{1}[a-zA-Z0-9._]{2,}/", $email)) {
            $error[] = 'Please enter valid Email!';
        }
        //CHECK IF PASSWORD FIELD IS EMPTY
        if (empty($pass_word)) {
            $error[] = 'Please Fill In Your Password!!!';
        }
        //CHECK PASSWORD CHARACTERS
        if (!preg_match("/^[a-zA-Z,0-9_]*$/", $pass_word)) {
            $error[] = 'Please only enter letters and numbers for your passowrd!';
        }
        //CHECK TO SEE IF $ERROR ARRAY IS NOT EMPTY
        if (!empty($error)) {
            //IF $ERROR ARRAY IS NOT EMPTY DISPLAY THE ERROR MESSAGE
            foreach ($error as $dis_error) {
                echo displayError($dis_error);
            }
        } else {
            if (testLogin($email, $pass_word, $rememberMe)) {
                header("location:members/home.php");
            } else {
                echo displayError("Your email or password is incorrect!");
            }
        }
    }
}
//******************** END OF FUNCTION FOR LOGIN VALIDATION **********************//
//================================================================================//

//================================================================================//
//****************** BEGINNING FUNCTION TO RECOVER PASSWORD **********************//
//================================================================================//
/**
 * This function recovers the user password
 * 
 * @access public  
 * 
 * @return void
 */
function recoverPassword()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['recover'])) {
        if (isset($_SESSION['token']) && isset($_POST['token_gen']) == $_SESSION['token']) {
            $email  = testInput($_POST['email']);
            $connect  = new Db;
            //CHECK FOR VALID EMAIL
            if (!preg_match("/[a-zA-Z0-9._]{3,}@[a-zA-Z0-9._]{3,}.{1}[a-zA-Z0-9._]{2,}/", $email)) {
                $error[] = 'Please enter valid email!';
            }
            //CHECK TO SEE IF EMAIL EXIST THEN QUERY
            if (emailExist($email)) {
                $email  = testInput($_POST['email']);
                $val_code      = md5($email.microtime());
                $val_query     = "UPDATE members SET validate_mem = :val_Code WHERE email = :Email";
                $val_query_pre = $connect->conn()->prepare($val_query);
                $val_query_pre->bindValue(':Email', $email);
                $val_query_pre->bindValue(':val_Code', $val_code);
                //$val_code_conn = $connect->conn()->prepare($val_query);
                $val_query_pre->execute();
                $cookieArrSet = [
                    "expires" => time() + 1800,
                    "path" => "/",
                    "domain" => "kadenstcloud.com",
                    "secure" => true,
                    "httponly" => true,
                    "samesite" => 'None'
                   ];
                setcookie('temp_code', $val_code, $cookieArrSet);
                $subject = "Please reset your password";
                $message = "Copy & paste {$val_code} in the text field Click on link: http://www.kadenstcloud.com/code.php?Email=$email&Code=$val_code";
                $header  = "no-reply@kadenstcloud.com";

                if (sendEmail($email, $subject, $message, $header)) {
                    echo "<div class='alert alert-success'> Please check your email</div>";;
                } else {
                    echo displayError('Something went wrong!');
                }
            } else {
                echo displayError("Email doesn't exist!");
            }
        }
    }
}
//********************* ENDING FUNCTION TO RECOVER PASSWORD **********************//
//================================================================================//

//================================================================================//
//****************** BEGINNING FUNCTION TO RESET PASSWORD ************************//
/**
 * This function resets the password
 * 
 * @access public  
 * 
 * @return void
 */
function resetPassword()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update_password'])) {
        if (isset($_SESSION['token']) && isset($_COOKIE['resetpassword'])) {
            if (isset($_GET['Email']) && isset($_GET['Code'])) {
                if ($_POST['password'] == $_POST['confirm_password']) {
                    $new_password_1 = md5($_POST['password']);
                    $res_email      = $_GET['Email'];
                    $res_code       = $_GET['Code'];

                    $res_connect    = new Db;
                    $res_sql        = "UPDATE members SET validate_mem = 0, password = :new_Password_1 WHERE email = :res_Email AND validate_mem = :res_Code";
                    $res_sql_update = $res_connect->conn()->prepare($res_sql);
                    $res_sql_update->bindValue(':new_Password_1', $new_password_1);
                    $res_sql_update->bindValue(':res_Email', $res_email);
                    $res_sql_update->bindValue(':res_Code', $res_code);
                    $result = $res_sql_update->execute();

                    if ($res_sql_update) {
                        header('location:login.php');
                        echo setSessionMessage('<div class="alert alert-success">Password has been updated</div>');
                    } else {
                        echo displayError('Something went wrong your password has not been updated');
                    }
                } else {
                    echo displayError('Passwords do not match');
                }
            } else {
                header('location:/recover.php');
                setSessionMessage("<div class='alert alert-danger'>Something Happened 1</div>");
            }
        } else {
              header('location:/recover.php');
              echo setSessionMessage("<div class='alert alert-danger'>Your validation code has expired</div>");
        }
    }
}
//*********************** ENDING FUNCTION TO RESET PASSWORD **********************//
//================================================================================//

//===============================================================================//
/**
 * This funtion returns boolean if the username exist or not
 * 
 * @param string $email   This param has the email address
 * @param string $subject This param has the email subject
 * @param string $msg     This param has the email message body
 * @param string $header  This param has the email header
 * 
 * @access public
 * 
 * @return mixed
 */
function sendEmail($email, $subject, $msg, $header)
{
    return mail($email, $subject, $msg, $header);

}
//===============================================================================//

//=====================================================================//
/**
 * This function returns a session message
 * 
 * @param string $msg This has the users form input data
 * 
 * @access public  
 * 
 * @return mixed
 */
function setSessionMessage($msg)
{
    if (!empty($msg)) {

        $_SESSION['message'] = $msg;

    } else {
        $message = "";
    }
}
//=====================================================================//

//=====================================================================//
/**
 * TestInput function sanatizes the form feilds
 *
 * @param string $data This has the users form input data
 * 
 * @access public  
 * 
 * @return mixed
 */
function testInput($data) 
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
    $data = htmlspecialchars($data);
    return $data;
}
//=====================================================================//

//================================================================================//
//******************* BEGINNING FUNCTION TO TEST LOGIN INPUT *********************//
//================================================================================//
/**
 * This funtion returns boolean if the username exist or not
 * 
 * @param string $email      This param has the email
 * @param string $pass_word  This param has the password
 * @param string $rememberMe This param has remember me check box value
 * 
 * @access public
 * 
 * @return mixed
 */
function testLogin($email, $pass_word, $rememberMe)
{
    $uno = '1';
    $log_connect         = new Db();
    //$log_sq = 'SELECT * FROM members WHERE user_name = :user_Name AND password = :pass_Word active_members = 1 LIMIT 1';
    $log_sql             = "SELECT * FROM members WHERE email = :eMail AND active_members = :Uno";
    $retrieve_email_pass = $log_connect->conn()->prepare($log_sql);
    $retrieve_email_pass->bindValue(':eMail', $email);
    $retrieve_email_pass->bindValue(':Uno', $uno);
    $retrieve_email_pass->execute();
    $row = $retrieve_email_pass->fetch();
    if ($row) {
        $db_password = $row['password'];

        if (md5($pass_word) == $db_password) {
            if ($rememberMe == true) {
                setcookie('Email', $email, time() + 86400);
            }
            $_SESSION['Email'] = $email;
            return true;
        } else {
            return false;
        }
    }
}
//******************* ENDING OF FUNCTION TO TEST LOGIN INPUT *********************//
//================================================================================//

//=====================================================================//
//****************** FUNCTION FOR TOKEN GENERATOR *********************//
/**
 * This function returns a generated token
 * 
 * @access public  
 * 
 * @return mixed
 */
function tokenGenerator()
{
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    return $token;
}
//===============================================================================//

//===============================================================================//
/**
 * This funtion returns boolean if the username exist or not
 * 
 * @param string $user_Name This param has the username submitted
 * 
 * @access public
 * 
 * @return boolean
 */
function usernameExist($user_Name)
{
    $conn             = new Db;
    $username_query   = "SELECT * FROM members WHERE user_name = '$user_Name'";
    $username_results = $conn->conn()->query($username_query);

    if ($username_results->fetch()) {
        return true;
    } else {
        return false;
    }
}
//===============================================================================//

//================================================================================//
//*********** BEGINNING FUNCTION TO STORE USER REGISTRATION IN DATABASE **********//
//================================================================================//
/**
 * This funtion returns boolean if the username exist or not
 * 
 * @param string $first_name This param has the first name
 * @param string $last_name  This param has the lat name
 * @param string $username   This param has the username
 * @param string $email      This param has the email 
 * @param string $pass_word  This param has the password
 * 
 * @access public
 * 
 * @return mixed
 */
function userRegistration($first_name, $last_name, $username, $email, $pass_word)
{
    date_default_timezone_set("America/New_York"); 
    $date_time    = date("F d Y  g:i:s a");

    $first_name       = testInput($_POST['first_name']);
    $last_name        = testInput($_POST['last_name']);
    $user_name        = testInput($_POST['username']);
    $email            = testInput($_POST['email']);
    $pass_word        = testInput($_POST['password']);

    $password_hide    = md5($pass_word);
    $validation_code  = md5($user_name.microtime()); 

    $connect  = new Db;
    $reg_sql  = "INSERT INTO members(first_name, last_name, user_name, email, password, validate_mem, active_members) VALUES(:firstName, :lastName, :userName, :eMail, :passWord, :validateMem, '0')";
    $pre_stmt = $connect->conn()->prepare($reg_sql);
    //BIND VARIABLE WITH INPUT PARAMETERS
    $pre_stmt->bindValue(':firstName', $first_name);
    $pre_stmt->bindValue(':lastName', $last_name);
    $pre_stmt->bindValue(':userName', $user_name);
    $pre_stmt->bindValue(':eMail', $email);
    $pre_stmt->bindValue(':passWord', $password_hide);
    $pre_stmt->bindValue(':validateMem', $validation_code);
    $execute  = $pre_stmt->execute();

    if ($execute) {
        echo '<div class="alert alert-success"> You have succesfully registered please check your email! </div>';
        $subject = "Please Activate Your Account";
        $msg     = "Please activate your account. Click on the link below: http://kadenstcloud.com/activate.php?email=$email&code=$validation_code";
        $header  = "no-reply@kadenstcloud.com";
        sendEmail($email, $subject, $msg, $header);
        return true;
        echo setSessionMessage('<div class="alert alert-success">Please check your email</div>');
        header('location:/login.php');
    } else {
        echo '<div class="alert alert-danger"> Something went wrong!!! </div>';
        return false;
        header('location:/register.php');
    }
}
//************ ENDING FUNCTION TO STORE USER REGISTRATION IN DATABASE ************//
//================================================================================//

//================================================================================//
//********** BEGINNING FUNCTION FOR VALIDATION CODE TO RESET PASSWORD ************//
/**
 * This function valadates the code sent to the user before setting the password
 * 
 * @access public  
 * 
 * @return void
 */
function validateCode()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_COOKIE['temp_code'])) {
            if (isset($_GET['Email']) && isset($_GET['Code'])) {
                if (isset($_POST['validate_code'])) {
                    $eMail   = $_GET['Email'];
                    $code    = $_POST['token'];
                    $connect = new Db;
                    $sql_val_code = 'SELECT * FROM members WHERE validate_mem = "$code" AND email = "$eMail"';
                    $result_sql_val_code = $connect->conn()->prepare($sql_val_code);
                    $results = $result_sql_val_code->execute();
                    if ($results) {
                        $cookieArrSet = [
                            "expires" => time() + 1800,
                            "path" => "/",
                            "domain" => "kadenstcloud.com",
                            "secure" => true,
                            "httponly" => true,
                            "samesite" => 'None'
                           ];
                        setcookie('resetpassword', $code, $cookieArrSet);
                        header("location:/reset.php?Email=$eMail&Code=$code");
                    } else {
                        echo displayError('Your validation code '.$code.' is incorrect');
                    }

                }
            } else {
                header("location:recover.php");
                setSessionMessage("<div class='alert alert-danger'>Your validation code has expired</div>");
            }
        } else {
            header("location:/recover.php");
            setSessionMessage("<div class='alert alert-danger'>Please check the time</div>");
        }
    }
}
//************ ENDING FUNCTION FOR VALIDATION CODE TO RESET PASSWORD **************//
//================================================================================//