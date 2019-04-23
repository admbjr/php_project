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

if (isset($_POST['add_desti']))
{
	$desti_name = $_POST['desti_name'];
    $pdo = Database::getDb();
    $s = new Destination();

  $imageName = $_FILES['image']['name'];
  $imageType = $_FILES['image']['type'];
  $imageData = file_get_contents($_FILES["image"]["tmp_name"]);


  try
  {
    $sql = 'INSERT INTO destination SET
        desti_name = :desti_name,
        desti_img_name = :desti_img_name,
        desti_img = :desti_img';
    $s = $pdo->prepare($sql);
    $s->bindValue(':desti_name', $desti_name);
    $s->bindValue(':desti_img_name', $imageType);
    $s->bindValue(':desti_img', $imageData);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Database error storing file!';
    exit();
  }
}


if (isset($_GET['action']) and
    ($_GET['action'] == 'view') and
    isset($_GET['id']))
{

  try
  {
    $sql = 'SELECT destination
        FROM desti_test
        WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_GET['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Database error fetching requested file.';
    //include 'error.html.php';
    exit();
  }

  $file = $s->fetch();
  if (!$file)
  {
    $error = 'File with specified ID not found in the database!';

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
   echo "<li><a href='destinationDetail.php?id=$desti->desti_id'>" . $desti->desti_name . "</a></br>";
    
	
//image display				
		$sql = "SELECT * FROM destination WHERE desti_id = :id ";
		echo '<img src="data:image/jpeg;base64,'.base64_encode($sql).'" height="200" width="200" /> ' ; 

				
//update and delete features
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