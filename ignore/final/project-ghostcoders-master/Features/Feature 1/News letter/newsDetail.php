<?php
	require_once 'database.php';
	require_once 'News.php';
	if(isset($_GET['news_id'])){
		$news_id = $_GET['news_id'];
		$dbcon=Database::getDb();
		$n = new News();
		$news = $n->getNewsById($news_id, $dbcon);
		
	}
	echo "<a href='listNews.php'>". "List of All News" ."</a><br/><br/>";
	
	echo $news->news_title."<br/>";
	echo $news->news_body."<br/>";
	
?>