<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
     //phpinfo();
	 echo "hello"." ".$_POST["name"];
	 echo "You are ".$_POST["age"]." years old.".date("h:m:s Y/M/D");
	 $connector = mysql_connect("localhost:3306","root","root");
	 if($connector){
		 echo "connect to MySQL56...\n";
		 mysql_select_db("world",$connector);
         $result = mysql_query("select * from city");
		 $i = 0;
		 while($row = mysql_fetch_array($result)){
			 echo "row".$i." ".$row['Name']."\n";
			 echo "<br/>";
			 ++$i;
		 }
	 }
	 else{
		 die("connect failed..".mysql_error());
	 }
?>
</body>
</html>