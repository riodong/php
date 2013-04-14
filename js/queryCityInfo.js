var xmlHttpRequest;
function createXMLHttpRequest(){
	var xmlHttpRequest;
	if(window.XMLHttpRequest){
		xmlHttpRequest = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttpRequest;
}

function getCityInfo(cityname){
	xmlHttpRequest = createXMLHttpRequest();
	var url = "getCityInfo.php?q="+cityname"&sid="+Math.random();
	xmlHttpRequest.onreadystatechange = cityInfoHandle;
	xmlHttpRequest.open("GET",url,true);
	xmlHttpRequest.send(null);
}

function cityInfoHandle(){
	if(xmlHttpRequest.readyState == 4 && xmlHttpRequest.status == 200){
		document.getElementById("cityHit").innerHTML = xmlHttpRequest.responseText;
	}
}