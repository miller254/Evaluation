<!--

var xmlHttp

function showLeaveDays(str){
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null){
  		alert ("Browser does not support HTTP Request");
  		return;
  	}
	var url="get_showAnnualLeaveDays.php";
	url=url+"?q="+str;
	url=url+"&sid="+Math.random();
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
}

function editMenuContent(str){
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null){
  		alert ("Browser does not support HTTP Request");
  		return;
  	}
	var url="get_edit_MenuContent.php";
	url=url+"?q="+str;
	url=url+"&sid="+Math.random();
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
}

function stateChanged(){
	if (xmlhttp.readyState==4){
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	}
}

function DisplaySearch(url,q,r,s,t,u,v){ 
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null){
		alert ("Browser does not support HTTP Request")
		return
	}
	var url=url
	url=url+"?q="+q+"&r="+r+"&s="+s+"&t="+t+"&u="+u+"&v="+v
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged1
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}
function stateChanged1(){
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("AdminSearch").innerHTML=xmlHttp.responseText
	}
	else{
		document.getElementById("AdminSearch").innerHTML= "Loading..."
	}
}

function doThis(url,q,r,s,t,u,v){
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null){
		alert ("Browser does not support HTTP Request")
		return
	}
	var url=url
	url=url+"?q="+q+"&r="+r+"&s="+s+"&t="+t+"&u="+u+"&v="+v
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged2
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

function stateChanged2(){
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("displayOne").innerHTML=xmlHttp.responseText 
	}
	else{
		document.getElementById("displayOne").innerHTML= "Loading..."
	}
}

function showThis(url,q,r,s,t,u,v){ 
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)	{
		alert ("Browser does not support HTTP Request")
		return
	}
	var url=url
	url=url+"?q="+q+"&r="+r+"&s="+s+"&t="+t+"&u="+u+"&v="+v
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged3
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

function stateChanged3(){
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("displayTwo").innerHTML=xmlHttp.responseText
	}
	else{
		document.getElementById("displayTwo").innerHTML= "Loading..."
	}
}

function GetXmlHttpObject(){
	var xmlHttp=null;
	try{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e){
		// Internet Explorer
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e){
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}
-->