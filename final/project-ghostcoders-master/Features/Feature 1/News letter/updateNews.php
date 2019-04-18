<?php
	require_once 'database.php';
	require_once 'News.php';
	
	if(isset($_POST['update'])){
		$news_id = $_POST['news_id'];
		
		$dbcon = Database::getDb();
		$s = new News();
		$news = $s->getNewsById($news_id, $dbcon);
		var_dump($news);
	}
	if(isset($_POST['updatenews'])){
		$news_id = $_POST['news_id'];
		$news_title = $_POST['news_title'];
		$news_body = $_POST['news_body'];
		
		$dbcon = Database::getDb();
		$u = new News();
		$count = $u->updateNews($news_id, $news_title, $news_body, $dbcon);
		
		if($count){
			header("Location: listNews.php");
		}
		else{
			echo "problem updating";
		}
	}
	
?>
<form action="" method="post">
	<input type="hidden" name="news_id" value ="<?= $news->news_id ?>"/>
	News Title: <input type="text" name="news_title" value="<?= $news->news_title ?>" /><br/><br/>
	News Letter: <input type="text" name="news_body" value="<?= $news->news_body ?>" /><br/><br/>
	
	<input type="submit" name="updatenews" value="Update News Letter">
</form>

 