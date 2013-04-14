<?php
$con = mysql_connect("localhost","root","root");
if(!$con){
	die('Could not connect'.mysql_errno());
}

$sql_query = "select * from city";

mysql_select_db("world",$con);
$result = mysql_query($sql_query);

while($row = mysql_fetch_array($result)){
	echo "<option>".$row['Name']."</option>";
}

mysql_close($con);
?>