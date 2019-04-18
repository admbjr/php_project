<?php
require_once 'Database.php';
require_once 'Student.php';

$dbcon = Database::getDb();
$b = new Blog();
$myblog =  $b->getAllblog(Database::getDb());
$Jsonpond = json_encode();



