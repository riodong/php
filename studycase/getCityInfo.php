<?php

$q = $_GET['q'];

$con = mysql_connect("localhost","root","root");

mysql_select_db("world");
$sql = "select * from city where Name like '%".$q."%'";
$result = mysql_query($sql);

echo "<table border='1'>";

while($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['CountryCode']."</td>";
	echo "<td>".$row['District']."</td>";
	echo "<td>".$row['Population']."</td>";
	echo "</tr>";
}
echo "</table>";

mysql_close($con);
?>