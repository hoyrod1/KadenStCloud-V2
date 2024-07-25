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
 * @link     https://kadenstcloud/Db.php
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

        $this->_servname = "localhost:3306";
        $this->_username = "kadenstcloud_kadenstcloud";
        $this->_password = "SGqju2M0NF{?";
        $this->_dbname = "kadenstcloud_reg_email_log";
	public function conn() 
	{

		$this->servername = "";
		$this->username = "";
		$this->password = "";
		$this->dbname = "";


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
<<<<<<< HEAD

?>
=======
/*
$con = mysqli_connect('localhost', 'root', '', 'reg_email_log');
if (!$con) {
	echo "Not Connected";
}
else
{
	echo "Connected";
}
*/
 ?>
>>>>>>> origin/main
