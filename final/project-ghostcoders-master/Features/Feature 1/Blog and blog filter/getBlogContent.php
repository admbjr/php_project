<?php
require_once 'Database.php';
require_once 'blogs.php';

$db = Database::getDb();
$a = new Blog();

$author = $_GET['blgContent'];

$blogs = $a -> getBlogContent($db, $author);

$jsonstu = json_encode($blogs);

header('Content-Type: Application/json');
echo $jsonstu;