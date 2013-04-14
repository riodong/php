<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$param = "usr";
$array1 = array(
"griffin"=>array
(
"peter",
"Lois",
"Megan"));
echo "Hello"." ".$param;
echo "Hello"." ".$array1["griffin"][1];
?>

<form action="php1.php" method="post">
Name :<input type="text" name="name" />
</br>
Age  :<input type="text" name="age" />
<input type="submit" value="clickMe"/>

</form>
</body>
</html>