<?php
require_once "Database.php";
require_once "blogs.php";

$db = Database::getDb();
$b = new Blog();
$author = $b->getAuthors($db);
$jsonprod =  json_encode($author);

header('Content-Type: application/json');


echo  $jsonprod;

