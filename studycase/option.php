<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Option</title>
<script type="text/javascript">
var xmlHttpRequest;
function createHttpRequest(){
	var xmlHttp = null;
	if(window.ActiveXObject){
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}
	return xmlHttp;
}
function cdHandler(){
	if(xmlHttpRequest.readyState == 4 && xmlHttpRequest.status == 200){
		document.getElementById("txtHint").innerHTML = xmlHttpRequest.responseText;
	}
}

function showCD(str){
	var url = "queryCdInfo.php?q="+str+"&sid="+Math.random();
	xmlHttpRequest = createHttpRequest();
	xmlHttpRequest.onreadystatechange = cdHandler;
	xmlHttpRequest.open("GET",url,true);
	xmlHttpRequest.send(null);
}
</script>
</head>
<body>
<form>
Select a CD:
<select name="cds" onchange="showCD(this.value)">
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$author = $xmlDoc->getElementsByTagName("ARTIST");
for($i=0;$i<=$author->length-1;++$i){
	if($author->item($i)->nodeType==1){
	   $author_specific = $author->item($i)->childNodes->item(0)->nodeValue;
       echo "<option value=".$author_specific.">".$author_specific."</option>";
	}
}
?>
</select>
</form>
<p><div id="txtHint"><b>CD Info will be listed here.</b></div></p>
</body>
</html>