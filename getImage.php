<?php
require 'db_open.php';
$link = mysql_connect($host, $username, $password);
mysql_select_db($db_name);
$query = 'SELECT type,img FROM artifects WHERE id="' . $_GET['id'] . '"';
$result = mysql_query($query,$link);
if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
} else {
	$row = mysql_fetch_assoc($result);
	header('Content-Type: ' . $row['type']);
	echo $row['img'];
}
?>