<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by CSS Templates For Free
http://www.csstemplatesforfree.com
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>National Archives Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" /></head>
<body>
<div id="header">
	<h1><a href="#">National Archives Management System</a></h1>
	
</div>
<div id="content">
	<div id="colOne">
		<h2>Employee List</h2>
	    <?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="";      // your password
$db_name="museum_management";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$sql1 = "SELECT  `name`,`post`, `id`,`email`, `contect`, `date`, `month`, `year` FROM `employee`";
$result1 = mysql_query($sql1);

while($row = mysql_fetch_array($result1))
{
echo "<table>";
			echo "<tr style='font-weight: bold;'>";
			
			echo "</tr>";
			echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
			echo "<tr>"."<td align='center'>".'id'."</td>"."<td>".$row['id'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Name'."</td>"."<td>".$row['name'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Post'."</td>"."<td>".$row['post'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Email'."</td>"."<td>".$row['email'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Contect No.'."</td>"."<td>".$row['contect'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Birth Date'."</td>"."<td>".$row['date'] ."-".$row['month']."-".$row['year']."</td> "."</tr>";
			
			echo "</table>".'<br>';
}
echo "</table>";
?>


  </div>
	<div id="colTwo">
		<ul>
			<li><a href="index.html" target="_self">logout</a>
				<form method="post" action="search.php">
					<div>
						<p>
						  <input type="text" id="search" name="search" value="" size="15" />
					      <label>
					      <select name="list">
					        <option value="name" selected="selected">name</option>
					        <option value="artist">artist</option>
					        <option value="employee_name">employee</option>
				          </select>
					      </label>
					  </p>
						<p>
						  <input type="submit" id="submit1" name="submit1" value="Search" />
					        </p>
					</div>
				</form>
			</li>
			<li>
				<h2>Pages</h2>
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="History.html">History</a></li>
					<li><a href="add_artifect.html">Cataloging &amp; Acquiaition<em>s</em></a></li>
				    <li><a href="download_pub.php">download publications</a></li>
				    <li><a href="Museum_Blueprints.html">Museum BluePrint</a></li>
				    <li><a href="upload_pub.php">add publications </a></li>
				    <li><a href="Employee.php">Employees</a></li>
				    <li><a href="#"></a></li>
				</ul>
			</li>
			<li>
				<h2>Archives</h2>
				<ul>
					<li><a href="Harappan.php">Harappan Gallery </a></li>
					<li><a href="kings.php">Indian Empires Art Gellery </a></li>
					<li><a href="independence.php">Indipendece Movement Gellery</a></li>
					<li><a href="painting.php">Paintings Gallery </a></li>
					<li><a href="tribal.php">Tribal Life Style Gallery </a></li>
					<li><a href="wood.php">Wood &amp; Matel Curving Gallery </a></li>
					<li><a href="weapon.php">Arms and Armour Gallery </a><a href="#"></a></li>
					<li></li>
				</ul>
			</li>
			<li>
				<h2><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language"></abbr></a></h2>
			</li>
			<li></li>
		</ul>
  </div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
	<p>Created by: Nidhi Vaishnav, CE138, D4 betch, D.D. University <a href="http://www.csstemplatesforfree.com/"><strong></strong></a></p>
</div>
</body>
</html>
