<?php
	require_once 'database.php';
	require_once 'News.php';
	
	$dbcon = Database::getDb();
	$n = new News();
	$mynews = $n->getAllNews(Database::getDb());
	echo "<form action='addNews.php' method='post'>" .
			"<input type='submit' value='add' name='Add'/>" .
		"</form>" ;		
	foreach($mynews as $news){
		//echo "<li>".$news->news_body ."</li>";
		echo "<li><a href='newsDetail.php?news_id=$news->news_id'>".$news->news_title ."</a>";
		echo "<form action='updateNews.php' method='post'>" .
			"<input type='hidden' value='$news->news_id' name='news_id' />" .
			"<input type='submit' value='Update' name='update'/>" .
			"</form>" .
			"<form action='deleteNews.php' method='post'>" .
			"<input type='hidden' value='$news->news_id' name='news_id' />" .
			"<input type='submit' value='Delete' name='delete'/>" .
			"</form>" .   
			"</li>";
	}
		
?>