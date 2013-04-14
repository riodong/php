<?php
$property = $_POST['property'];
$queryInfo = $_POST['queryInfo'];
//print_r($property);
//print_r($queryInfo);

$con = mysql_connect("localhost","root","root");
mysql_select_db("ormanager");

$sql_query = "select * from ormanager.tbl_requirement where ".$property." like '%".$queryInfo."%'";

//echo $sql_query;

$result = mysql_query($sql_query);
//$rowArray = mysql_fetch_array($result);
while($row = mysql_fetch_array($result)){
	echo "<tr><td>".$row['rid']."</td><td>".$row['rname']."</td><td>".$row['rname']."</td><td>".$row['responsible']."</td><tr>";
}
mysql_close($con);
?>