<?php
require_once '../includes/database.php';


$pdo = Database::getDb();

$table = 'blog';
$searchData = [];

if(isset($_POST['submit_search'])) {

	$searchphrase = $_POST['search_key'];

	if(isset($_POST['search_table'])) {
		$table = $_POST['search_table'];
	} else if(isset($_GET['last_table'])) {
		$table = $_GET['last_table'];		
	}

	$sql_search = "SELECT * FROM ".$table." WHERE ";
	$sql_search_fields = Array();
	$sql = "SHOW COLUMNS FROM ".$table;
	
	$getcol = $pdo->prepare($sql);
	$getcol->execute();

    while($r = $getcol->fetch()){
        $colum = $r[0];
        $sql_search_fields[] = $colum." like('%".$searchphrase."%')";
    }


	$sql_search .= implode(" OR ", $sql_search_fields);
	$getData = $pdo->prepare($sql_search);
	$getData->execute();
	$searchData = $getData->fetchAll();
}
?>
<div class="container mt-2">
	<form action="../pages/index.php?last_table=<?php echo $table ?>" method="post" class="form-inline">
		<div class="form-group">
			<select name="search_table" class="form-control">
				<?php 
					if($table) {
						echo '<option disabled="true" selected="true" value="'.$table.'">'.$table.'</option>';
					}
				 ?>
				<option value="blog">Blog</option>
				<option value="news_letter">NewsLetter</option>
				<option value="destinations">My destinations</option>
				<option value="gallery">Gallery - all images</option>
				<option value="faq">FAQ</option>
			</select>
		</div>
		
		<div class="form-group ml-3 mr-3">
		<!--search bar -->
			<input type="hidden" name="search_key" class="search-bar" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" value="search" name="submit_search" class="form-control">
		</div>
	</form>
	    <div class="row mt-5">
            <?php
                if(sizeof($searchData) > 0) {
                	if($table == 'blog') {
                    	foreach($searchData as $blog){
                        	echo '<div class="col-lg-4 mb-2">
                               	 <img src="../images/'.$blog['image'].'" alt="image not found" width="320" height="225">

                                <h6>'.$blog['blog_name'].'</h6></div>';
                        }     
                	}

                	if($table == 'news_letter') {
                    	foreach($searchData as $news){
                        	echo '<div class="col-lg-4 mb-2">
                                	<h6>'.$news['news_title'].'</h6>
                                	<p>'.$news['news_body'].'</p></div>';
                        }     
                	}
					
					if($table == 'destinations') {
                    	foreach($searchData as $destinations){
                        	echo '<div class="col-lg-4 mb-2">
                               	 <img src="../images/'.$destinations['image'].'" alt="image not found" width="320" height="225">

                                <h6>'.$destinations['country'].'</h6></div>';
                        }     
                	}
					
					if($table == 'gallery') {
                    	foreach($searchData as $gallery){
                        	echo '<div class="col-lg-4 mb-2">
                               	 <img src="../images/'.$gallery['image'].'" alt="image not found" width="320" height="225">

                                <h6>'.$gallery['destination'].'</h6></div>';
                        }     
                	}
					
					if($table == 'faq') {
                    	foreach($searchData as $faq){
                        	echo '<div class="col-lg-4 mb-2">
                                	<h6>'.$faq['questions'].'</h6>
                                	<p>'.$faq['answers'].'</p></div>';
                        }     
                	}
					
                } 
                else {
                   echo '<div class="alert alert-info d-flex justify-content-center">
                            <strong>Sorry !</strong> No Result Found
                        </div>';
                }
            ?>
    </div>
</div>