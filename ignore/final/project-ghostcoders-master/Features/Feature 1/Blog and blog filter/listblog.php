<?php
require_once 'Database.php';
require_once 'blogs.php';

$dbcon = Database::getDb();
$b = new Blog();
$myblog =  $b->getAllblog(Database::getDb());

echo "<h1>List of Blogs </h1>";

foreach($myblog as $blg){
	
	echo "<li><a href='blogDetail.php?id=$blg->id'>".$blg->blogName ."</a>";
    echo "<form action='updateBlog.php' method='post'>" .
			"<input type='hidden' value='$blg->id' name='id' /> <br />".
			//"<input type='text' value='$blg->blogName' name='blogName' /><br /><br />".
			//"<input type='text' value='$blg->author' name='author' /><br /><br />".
			"<input type='submit' value='Update' name='update' />".
		  "</form>" .
	
		 "<form action='deleteBlog.php' method='post'>" .
			 "<input type='hidden' value='$blg->id' name='id' />".
			 "<input type='submit' value='delete' name='delete' />".
         "</form>" .
        "</li>";
   }


?>


<form action="" method="get">
    <select id="author">

    </select>
</form>

<div id="results">

</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function (){
        $.getJSON('getBlog.php', function(data){
            //console.log($data);
            var pro ="";
            $.each(data, function(index, proobj){
                pro += "<option value='" + proobj.author +  "'>" + proobj.author +  "</option>"
            })
            console.log(pro);

            $('#author').html(pro);
 
        })

        $('#author').change(function(){
            selval = $('#author').val();
            
            $.getJSON('getBlogContent.php', { blgContent : selval}, function(authors){
                auth = '';
                $.each(authors, function (index, author) {
                    auth += "<li>" + author.blogContent  "</li>";
                 })
                $('#results').html(auth);
            })
        })


    })
</script>

















