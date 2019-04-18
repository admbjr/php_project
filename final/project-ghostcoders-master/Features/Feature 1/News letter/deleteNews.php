<?php
	require_once 'database.php';
	require_once 'News.php';
	
	if(isset($_POST['delete'])){
		$news_id = $_POST['news_id'];
		
		$dbcon = Database::getDb();
		$n = new News();
		$count = $n->deleteNews($news_id, $dbcon);
		
		if($count){
			header("Location: listNews.php");
		}
		else{
			echo "problem deleting";
		}
		
	}	
?>
 