<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="";      // your password
$db_name="museum_management";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database

$uname = $_POST['uname'];
$pword1=$_POST['pword1'];
$pword2=$_POST['pword2'];
$email = $_POST['email'];
$name=$_POST['name'];
$contect=$_POST['contect'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$website = $_POST['website'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$post = $_POST['post'];
if(empty($pword1) || empty($pword2) || empty($uname) || empty($name) || empty($contect))
{
	echo "fields are empty".'<br>';
	header("Location:registor.html");
}
else if($pword1!=$pword2){
	echo "password doesnot match".'<br>';
	header("Location:registor.html");
}
else{
		$query = "INSERT INTO employee (uname,pword,email,name,contect,street,city,state,country,website,gender,date,month,year,post) VALUES ('$uname','$pword1', '$email', '$name' , '$contect', '$street', '$city', '$state', '$country', '$website', '$gender', '$date', '$month', '$year', '$post')";
		mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
// name, email and address are fields of your fields; info your table. $name, $email and $address are values collected from the form
		header("Location:index.html");
}
 

?>

