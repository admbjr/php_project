<?php
require_once '../includes/database.php';
require_once '../includes/Classes/blogs.php';

	$id = null;

	// Get Blog By ID
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];

	    $dbcon = Database::getDb();
	    $b = new Blog();
		$blog = $b->getblogById($id, $dbcon);

		$allBlog = $b->getAllblog($dbcon);
	}

require_once("../includes/header.php");
require_once("../includes/nav-add-link.php");

?>
<header class="masthead" style="background-image:url('../assets/img/blog.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1><strong>Blog</strong><br></h1><span class="subheading">Please share your wonderful adventures where other members can read and share!<br></span></div>
            </div>
        </div>
    </div>
 </header>
<div>
	<div class="container">
		<div class="row">
			<h2><?php echo $blog->blog_name; ?></h2>
		</div>

		<div class="row mt-2">
			<div class="border border-dark pl-5 pr-5 p-1">
				<span class="font-weight-bold">By <?php echo $blog->author; ?></span>
			</div>
			<div class="border border-dark pl-5 pr-5 p-1 ml-3">
				<span class="font-weight-bold"><?php echo $blog->created_at; ?></span>
			</div>
			<div class="border border-dark pl-5 pr-5 p-1 ml-3">
				<span class="font-weight-bold"><?php echo $blog->blog_category; ?></span>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-lg-4">
				<?php
					echo '<img src="../images/'.$blog->image.'" alt="image not found" width="350" height="255">'
				?>
			</div>

			<div class="col-lg-5">
				<p><?php echo $blog->blog_content ?></p>
			</div>
			
			<div class="col-lg-3 border border-dark w-100">
				<div class="row justify-content-center">
			        <h5>RELATED BLOGS</h5>
			    </div>  
				<?php 
					if(sizeof($allBlog) > 0) {
						$i=0;
						foreach ($allBlog as $blog) {
		                    echo '<a href="../blog/getBlog.php?id='.$blog->blog_id.'" class="w-100 mt-2 read-more">'.$blog->blog_name.'</a>';
		                    if(5 <= $i){
		                    	break;
		                    }
		                    $i++;
		                }
		                echo '<a href="../pages/blog.php" class="text-right w-100 read-more">View All Blogs<i class="fa fa-arrow-right"></i></a>';
		           	}
				 ?>
	                    
			</div>		
		</div>
	</div>
</div>
<?php 
    require_once("../includes/footer-add-link.php");
?>
