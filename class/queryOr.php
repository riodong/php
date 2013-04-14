<?php
@require 'requirement.php';
$con = mysql_connect("localhost","root","root");
mysql_select_db("ormanager");
$sql = "select * from ormanager.tbl_requirement";
$result = mysql_query($sql);
$allRow = mysql_fetch_row($result);

$orlist;
$i = 0;
foreach ($allRow as $row){
    $or = new requirement();
    $or->setRid($row['rid']);
    $or->setRname($row['rname']);
    $or->setRdes($row['rdes']);
    $or->setResponsibel($row['responsible']);   
    $orlist[$i] = $or;
    $i++;
}
?>