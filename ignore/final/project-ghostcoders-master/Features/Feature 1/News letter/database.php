<?php
	class Database
	{
		//properties
		private static $user = 'root';
		private static $pass = '';
		private static $db = 'test_nomadic_escape'; // database name we created in mysql_affected_rows
		private static $dsn ='mysql:host=localhost;dbname=test_nomadic_escape';
		private static $dbcon;
		private function __construct(){
			
		}		
		//get pdo connection
		public function getDb(){
			if(!isset(self::$dbcon)){
				try{
					self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
					self::$dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}
				catch(PDOException $e){
					$msg = $e->getMessage();
					include 'customError.php';
					exit();
				}
			}
			return self::$dbcon;
		}
	}
?>