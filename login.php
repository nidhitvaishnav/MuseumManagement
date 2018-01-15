<?php

session_start();
//header("Content-type:image/png");
include("db_open.php");
if(isset($_POST['uname']) && isset($_POST['pword']))
{
	$a=$_POST['uname'];
	$b=$_POST['pword'];

	
	if(empty($a)  || empty($b))
	{
		echo "Fields are empty";
	}
	else
	{
		if($a!="" && $b!="")
		{
			$host="localhost"; //yout host name
			$username="root";  //yout user name
			$password="";      // your password
			$db_name="museum_management";  // your database name
			$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
			mysql_select_db("$db_name")or die("can not select DB"); //select your database
			$qry=mysql_query("select * from employee where uname='$a' && pword='$b'");
			$num=mysql_num_rows($qry);
			if($num==0)
			{
				include('index.html');
				echo '<strong>Incorrect verification code.</strong>';
			}
			else
			{
					header("Location:home.html");
	
			}
		}
		else
		{
			include('index.html');
			echo 'Sorry incorrect username and password';
		}

	}
}

?>



