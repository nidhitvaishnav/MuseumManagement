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
		<h2>Adding a publication file</h2>
		<br />
		
	    <!--	<p><small>Management System</small></p>-->
		 <form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1"
                   cellspacing="1" class="box">
                <tr>
                    <td>Please select a file</td></tr>
                <tr>
                    <td>
                        <input type="hidden" name="MAX_FILE_SIZE"
                               value="16000000">
                        <input name="userfile" type="file" id="userfile"> 
                    </td>
                    <td width="80"><input name="upload"
                                          type="submit" id="upload" value=" Upload "></td>
                </tr>
            </table>
        </form>
		
		<?php
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
    $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
    $db = mysql_select_db('museum_management', $con);
    if ($db) {
        $query = "INSERT INTO upload (name, size, type, content ) " .
                "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
        mysql_query($query) or die('Error, query failed');
        mysql_close();
        echo "<br>File $fileName uploaded<br>";
    } else {
        echo "file upload failed";
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
</html>

