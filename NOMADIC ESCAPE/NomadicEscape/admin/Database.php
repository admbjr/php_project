<?php


// class Database
// {
//     //properties
//     private static $user = 'root';
//     private static $pass = 'root';
//     private static $db = 'TEST_Nomadic_Escape';
//     private static $dsn = 'mysql:host=localhost;dbname=TEST_Nomadic_Escape';
//     private static $dbcon;

//     private function __construct()
//     {
//     }

//     //get pdo connection
//     public static function getDb(){
//         if(!isset(self::$dbcon)) {
//             try {
//                 self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
//                 self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             } catch (PDOException $e) {
//                 $msg = $e->getMessage();
//                 include 'customerror.php';
//                 exit();
//             }
//         }

//         return self::$dbcon;
//     }
// }


ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("America/Toronto");

$con = mysqli_connect("localhost", "root", "root", "TEST_Nomadic_Escape"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
