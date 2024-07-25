<?php
/**
 * * @file
 * php version 8.2
 * Config File For KadenStCloud.com Registration-Login-APP
 * 
 * @category CMS
 * @package  Database_Configuration
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://KadenStCloud.com/functions/Db.php
 */
error_reporting(E_ALL);
/**
 * Database class
 * 
 * @category Database
 * @package  Database_Class
 * @author   Rodney St.Cloud <hoyrod1@aol.com>
 * @license  STC Media inc
 * @link     https://KadenStCloud.com/functions/Db.php
 */
class Db
{
    private $_servname;
    private $_username;
    private $_password;
    private $_dbname;
    /**
     * Retrurns the database connection
     *
     * @return mixed
     */
    public function conn() 
    {
        $this->_servname = "";
        $this->_username = "";
        $this->_password = "";
        $this->_dbname = "";


        try 
        {
            $dns = "mysql:host=$this->_servname;dbname=$this->_dbname;charset=utf8";
            $pdo_conn = new PDO($dns, $this->_username, $this->_password);

            $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected Succecfully!";

            return $pdo_conn;


        }
        catch(PDOException $e) 
        {
            echo "Connected Failed: " . $e->getMessage();
        }

    }
}
