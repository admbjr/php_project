
<?php
		require_once 'Database.php';
		require_once 'blogs.php';
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$dbcon = Database::getDb();
			$b = new Blog();
			$blog = $b->getBlogById($id, $dbcon);
			
	}

	    echo "<h1> Blog detail</h1>";
		echo "<b>BlogName:</b>" ."  ". $blog->blogName . "<br/><br/>";
		echo "<b>Author:</b>" ."  " .$blog->author . "<br/><br/>";
		echo "<b>BlogContent:</b>" ."  ". $blog->blogContent . "<br/>";
		//echo "blogContent:" ."<textarea value=$blog->blogContent />" ;