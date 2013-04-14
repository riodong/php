<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>queryCdInfo</title>
</head>

<body>
<?php
/*require_once('FirePHPCore/fb.php');
ob_start();
$firephp = FirePHP::getInstance(true);
$var = array('i'=>10, 'j'=>20); 
$firephp->log($var, 'Iterators');

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");
$y;
$author = $xmlDoc->getElementsByTagName("ARTIST");
$q = $_GET["q"];

for($i=0;$i<$author->length-1;++$i){
	if($author->item($i)->nodeType == 1){
		if($author->item($i)->childNodes->item(0)->nodeValue==$q){
			$y = $author->item($i)->parentNode;
		}
	}
}
//fb($y,FirePHP::INFO);
$cd = $y->childNodes;
for($i=0;$i<$cd->length;++$i){
    if($cd->item($i)->nodeType==1){
     echo($cd->item($i)->nodeName);
     echo(": ");
     echo($cd->item($i)->childNodes->item(0)->nodeValue);
     echo("<br />");
	}
}*/

$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++)
{
//Process only element nodes
if ($x->item($i)->nodeType==1)
  {
  if ($x->item($i)->childNodes->item(0)->nodeValue == $q)
    { 
    $y=($x->item($i)->parentNode);
    }
  }
}


$cd=($y->childNodes);
	
for ($i=0;$i<$cd->length;$i++)
{
	//Process only element nodes
	if ($cd->item($i)->nodeType==1)
	{
		echo($cd->item($i)->nodeName);
		echo(": ");
		echo($cd->item($i)->childNodes->item(0)->nodeValue);
		echo("<br />");
	}
}

?>
</body>
</html>