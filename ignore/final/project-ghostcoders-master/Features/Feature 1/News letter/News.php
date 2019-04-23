<?php 	
	class News
	{
		public function getNewsById($news_id, $db){
			$sql = "SELECT * from news_letter WHERE news_id= :news_id";
			$pst = $db->prepare($sql); 
			$pst->bindParam(':news_id',$news_id);
			$pst->execute();
			$news = $pst->fetch(PDO::FETCH_OBJ);
			return $news;
		}
		public function getAllNews($dbcon){
			$dbcon = Database::getDb();
			$sql = "SELECT * FROM news_letter";
			
			$pdostm = $dbcon->prepare($sql); 
			$pdostm->execute();
			$News = $pdostm->fetchAll(PDO::FETCH_OBJ);
			return $News;
		}
		public function addNews($news_title, $news_body){
			$db = Database::getDb();
			$sql = "INSERT INTO news_letter (news_title,news_body)
				values(:news_title, :news_body)";
			$pst = $db->prepare($sql);
			$pst->bindParam(':news_title',$news_title);
			$pst->bindParam(':news_body',$news_body);			
			$count= $pst->execute();
			echo $count;
		}
		public function updateNews($news_id,$news_title, $news_body, $db){
			$sql = "UPDATE news_letter 
					SET news_title = :news_title, news_body = :news_body WHERE news_id= :news_id";
			$pst = $db->prepare($sql);
			$pst->bindParam(':news_id',$news_id);
			$pst->bindParam(':news_title',$news_title);
			$pst->bindParam(':news_body',$news_body);
			$count = $pst->execute();			
			return $count;
		}
		public function deleteNews($news_id, $db){
			$sql = "DELETE FROM news_letter WHERE news_id = :news_id";
			$pst = $db->prepare($sql);
			$pst->bindParam(':news_id',$news_id);
			$count = $pst->execute();
			
			return $count;
		}
	}
?>