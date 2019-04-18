<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Nomadic Escape</title>
</head>
<h1>User Profile</h1>

<h2>Add your destination image:</h2>
<body>

<form action="listDestination.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="image"></br><br />
	  Add destination: <input type="text" name="desti_name" /><br />
    <input type="submit" name="add_desti" value="Add Destination">
	<input type="hidden" name="submit" value="Upload">
</form><br />

<?php
require_once 'DatabasePro.php';
require_once 'Destination.php';

    if(isset($_POST['add_desti'])){
       $desti_name = $_POST['desti_name'];
       $db = Database::getDb();
       $d = new Destination();
	   
	   $con = mysqli_connect("localhost","root","","test_nomadic_escape");
	
	$imageName = mysqli_real_escape_string($con,$_FILES["image"]["name"]);
	$imageData = mysqli_real_escape_string($con,file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysqli_real_escape_string($con,$_FILES["image"]["type"]);
	
	if(substr($imageType,0,5) == "image")
	{
		mysqli_query($con,"INSERT INTO destination VALUES('','$desti_name','$imageData','$imageName','')"); 
		echo "image uploaded";
	}
	else
	{
		echo "only images are allowed";
	}
	
}
?>

<h2> All my images: </h2>
<?php
require_once 'DatabasePro.php';
require_once 'Destination.php';

$dbcon = Database::getDb();
$d = new Destination();
$mydesti =  $d->getAllDestinations(Database::getDb()); 


foreach($mydesti as $desti){
   //echo "<li><a href='reviewDetail.php?id=$desti->destination_id'>" . $desti->destination_name . "</a></br>";
   echo "<li><a href='destinationDetail.php?id=$desti->desti_id'>" . $desti->desti_name . "</a></br>";
   echo "<form action='updateDestination.php' method='post'>" .
        "<input type='hidden' value='$desti->desti_id' name='id' />".
        "<input type='submit' value='Update' name='update' />".
		"</form></br>" .
		
		"<form action='deleteDestination.php' method='post'>" .
        "<input type='hidden' value='$desti->desti_id' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li></br>";
		
		
}

?>

</body>
</html>















