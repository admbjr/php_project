<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Nomadic Escape</title>
</head>
<h1>User Profile</h1>

<h2>All images:</h2>
<body>

<?php  
	$connect = mysqli_connect("localhost","root","","test_nomadic_escape");
    $query = "SELECT desti_img FROM destination";  
    $result = mysqli_query($connect, $query);  
         while($row = mysqli_fetch_array($result))  
           {  
              echo '<img src="data:image/jpeg;base64,'.base64_encode($row['desti_img'] ).'" height="200" width="200" /> ';  
           }  
?>  

<?php
require_once 'DatabasePro.php';
require_once 'Review.php';

    if(isset($_POST['addrev'])){
       $reviewContent = $_POST['reviewContent'];

       $db = Database::getDb();
       $r = new Review();
       $add = $r->addReview($reviewContent, $db);


       if($add){
           echo "Added review sucessfully";
       } else {
           echo "problem adding a review";
       }

    }
?>



<form action="" method="post">
    Add review: <input type="text" name="reviewContent" />
    <input type="submit" name="addrev" value="Add Review">
</form></br>


<?php
require_once 'DatabasePro.php';
require_once 'Review.php';
require_once 'Users.php';

$dbcon = Database::getDb();
$r = new Review();
//$u = new Users();
$myrev =  $r->getAllReviews(Database::getDb()); 
//$myuser =  $u->getUserById(Database::getDb()); 

foreach($myrev as $review){
   echo "<li>" . $review->review_content;
   
  /* $connect = mysqli_connect("localhost","root","","test_nomadic_escape");
   $sql = "SELECT first_name FROM users1 WHERE user1_id = :id ";
   
   $results = mysqli_query($connect,$sql);
   
   while($row = mysqli_fetch_array($results))  
           {  
              echo ($row['first_name'] );  
           } */

	
   
   echo "<form action='updateReview.php' method='post'>" .
        "<input type='hidden' value='$review->review_id' name='id' />".
        "<input type='submit' value='Update' name='update' />".
		"</form>" .
		
		"<form action='deleteReview.php' method='post'>" .
        "<input type='hidden' value='$review->review_id' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form></br>" .
        "</li>";
		
}
		
		?>


                  

 
		


</body>
</html>