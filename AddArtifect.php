
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="";      // your password
$db_name="museum_management";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database

$name = $_POST['name'];
$artist=$_POST['artist'];
$discription=$_POST['discription'];
$length = $_POST['length'];
$height=$_POST['height'];
$width = $_POST['width'];
$weight=$_POST['weight'];
$components = $_POST['components'];
$condition= $_POST['condition'];
$location = $_POST['location'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$doner_seller = $_POST['doner_seller'];
$contect = $_POST['contect'];
$prize = $_POST['prize'];
//echo $location;

if(empty($name))
{
	echo "afields are empty".'<br>';
	//header("Location:add_artifect.html");
}
//else if(empty($loction))
//{
	//echo "bfileds are empty".'<br>';
//}
else{
	if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
		$fileName = $_FILES['userfile']['name'];
		$tmpName = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		$fileType = mysql_real_escape_string($_FILES['userfile']['type']);
		$fp = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		if (!get_magic_quotes_gpc()) {
			$fileName = addslashes($fileName);
    	}
   /* $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
    $db = mysql_select_db('museum_management', $con);*/

			$query1 = "INSERT INTO artifects (name,artist,discription,length,height,width,weight,components,status, location,date,month,year,doner_seller,contect,prize,img_name, size, type, img) VALUES ('$name','$artist', '$discription', '$length' , '$height', '$width', '$weight', '$components', '$condition', '$location', '$date', '$month', '$year', '$doner_seller', '$contect', '$prize','$fileName', '$fileSize', '$fileType', '$content')";
		
			mysql_query($query1) or die('Query "' . $query1 . '" failed: ' . mysql_error());
			echo "artifect is added successfully in the database".'<br>';
			
		 	mysql_close();
        	echo "<br>File $fileName uploaded<br>";
    		header("Location:add_artifect.html");
	}
}
?>


<?php
/*if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
    $fileType = mysql_real_escape_string($_FILES['userfile']['type']);
    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }
   /* $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
    $db = mysql_select_db('museum_management', $con);*/
    /*if ($db) {
        $query = "INSERT INTO artifects (img_name, size, type, img ) " .
                "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
        mysql_query($query) or die('Error, query failed');
        mysql_close();
        echo "<br>File $fileName uploaded<br>";
    } else {
        echo "file upload failed";
    }
}*/
?>

