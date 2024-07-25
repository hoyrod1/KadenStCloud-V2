<?php 
class conn_cms
{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	public function conn() 
	{

		$this->servername = "";
		$this->username = "";
		$this->password = "";
		$this->dbname = "";


		try 
		{
		
		$pdo_conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);

		$pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo_conn;

		echo "Connected Succecfully!";
		
		}
		catch(PDOException $e) 
		{
		echo "Connected Failed: " . $e->getMessage();
		}

	} 	

}
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
