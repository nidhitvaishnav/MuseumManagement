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
		<h2>Searched Data </h2>
		<br />
	    <!--	<p><small>Management System</small></p>-->
		
		<?php
//require 'db_open.php';

if(isset($_POST['search']))
{
	$search=$_POST['search'];
	$area=$_POST['list'];
	if(empty($search)  || empty($area))
	{
		echo "Fields are empty";
	}
	else if($area=="employee_name")
	{
		 $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
		 $db = mysql_select_db('museum_management', $con);
		
		 $sql1 = "SELECT  `name`,`post`,`id`, `email`, `contect`, `date`, `month`, `year`, `street`,`city`,`state`,`country` FROM `employee` WHERE name='$search'" ;
$result1 = mysql_query($sql1);
		 if (mysql_num_rows($result1) == 0)
		 {
		 	echo "Database is empty <br>";
         }
		 else
		 {
		 	while($row = mysql_fetch_array($result1))
			{
			echo "<table>";
			echo "<tr style='font-weight: bold;'>";
			
			echo "</tr>";
			echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
			echo "<tr>"."<td align='center'>".'Name'."</td>"."<td>".$row['name'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'id'."</td>"."<td>".$row['id'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Post'."</td>"."<td>".$row['post'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Email'."</td>"."<td>".$row['email'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Contect No.'."</td>"."<td>".$row['contect'] ."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Birth Date'."</td>"."<td>".$row['date'] ."-".$row['month']."-".$row['year']."</td> "."</tr>";
			echo "<tr>"."<td align='center'>".'Address'."</td>"."<td>".$row['street'].",<br>".$row['city'].",<br>".$row['state'].",<br>".$row['country'] ."</td> "."</tr>";
			echo "</table>".'<br>';
			}
		}
	}
	else if($area=="artist"){
		$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
		$db = mysql_select_db('museum_management', $con);
   		$query = "SELECT id,alt,img_name,name,artist,discription,weight,components,date,month,year,status FROM artifects WHERE artist='$search'";
   		$result = mysql_query($query) or die('Error, query failed');
   		if (mysql_num_rows($result) == 0)
		{
        	echo "Database is empty <br>";
   		} 
		else
		{
      		for ( $i = 0 ; $i < mysql_num_rows($result) ; $i++ )
			{
       			$row = mysql_fetch_assoc($result);
			 	echo "<table>";
			 	echo "<tr style='font-weight: bold;'>";
				echo "</tr>";
			 	echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
       		 
			 	echo "<tr>";
			 	echo "<td align='center'>".'<img src="getImage.php?id=' . $row['id'] . '" alt="' . $row['alt'] . '" title="' . $row['name']  .'"/>  ' . "\n"."</td>"."</tr>";
			 // echo '<img src="getImage.php?id=' . $row['id'] . '" alt="' . $row['alt'] . '" title="' . $row['name']  .'"/>  ' . "\n";

			 	echo "</table>";
			  	echo "<table>";
			 	echo "<tr style='font-weight: bold;'>";
			
			 	echo "</tr>";
			 	echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
			 	echo "<tr>"."<td align='center'>".'name'."</td>"."<td>".$row['name'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'id'."</td>"."<td>".$row['id'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'artist'."</td>"."<td>".$row['artist'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'discription'."</td>"."<td>".$row['discription'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'weight'."</td>"."<td>".$row['weight']." kg" ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'components'."</td>"."<td>".$row['components'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'Date of acquiaitions'."</td>"."<td>".$row['date']."-".$row['month']."-".$row['year'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'status'."</td>"."<td>".$row['status'] ."</td> "."</tr>";
			 	echo "</table>".'<br>';
      		}
  		}
	}
	else
	{
		$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
		$db = mysql_select_db('museum_management', $con);
   		$query = "SELECT id,alt,img_name,name,artist,discription,weight,components,date,month,year,status FROM artifects WHERE name='$search'";
   		$result = mysql_query($query) or die('Error, query failed');
   		if (mysql_num_rows($result) == 0)
		{
        	echo "Database is empty <br>";
   		} 
		else
		{
      		for ( $i = 0 ; $i < mysql_num_rows($result) ; $i++ )
			{
       			$row = mysql_fetch_assoc($result);
			 	echo "<table>";
			 	echo "<tr style='font-weight: bold;'>";
				echo "</tr>";
			 	echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
       		 
			 	echo "<tr>";
			 	echo "<td align='center'>".'<img src="getImage.php?id=' . $row['id'] . '" alt="' . $row['alt'] . '" title="' . $row['name']  .'"/>  ' . "\n"."</td>"."</tr>";
			 // echo '<img src="getImage.php?id=' . $row['id'] . '" alt="' . $row['alt'] . '" title="' . $row['name']  .'"/>  ' . "\n";

			 	echo "</table>";
			  	echo "<table>";
			 	echo "<tr style='font-weight: bold;'>";
			
			 	echo "</tr>";
			 	echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
			 	echo "<tr>"."<td align='center'>".'name'."</td>"."<td>".$row['name'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'id'."</td>"."<td>".$row['id'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'artist'."</td>"."<td>".$row['artist'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'discription'."</td>"."<td>".$row['discription'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'weight'."</td>"."<td>".$row['weight']." kg" ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'components'."</td>"."<td>".$row['components'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'Date of acquiaitions'."</td>"."<td>".$row['date']."-".$row['month']."-".$row['year'] ."</td> "."</tr>";
			 	echo "<tr>"."<td align='center'>".'status'."</td>"."<td>".$row['status'] ."</td> "."</tr>";
			 	echo "</table>".'<br>';
      		}
  		}
	}
}
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
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
