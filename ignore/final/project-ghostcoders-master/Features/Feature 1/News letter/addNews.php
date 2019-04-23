<?php
require_once 'database.php';
require_once 'News.php';
	if(isset($_POST['addnews'])){
		$title = $_POST['title'];
		$news = $_POST['news'];
		
		$db = Database::getDb();
		$n = new News();
		$c = $n->addNews($title, $news, $db);
		
		if($c){
			echo "Problem adding a news letter <br/>";
		}
		else{
			echo "News letter Added successfully <br/>";
		}		
	}
	echo "<a href='listNews.php'>". "List of All News letters" ."</a><br/><br/>";
	
?>
	<form action="" method="post">
		News Title: <input type="text" name="title"/><br/><br/>
		News Letter: <input type="textarea" name="news"/><br/><br/>
		
		<input type="submit" name="addnews" value="Add News Letter">
	</form>
	
 