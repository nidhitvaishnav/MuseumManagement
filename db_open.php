<?php
//Connect to MySQL and Select DB
$host="localhost";
$username="root";
$password="";
$db_name="museum_management";
$con=mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");


?>