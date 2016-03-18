function ajaxGet(url, onSuccess){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
	    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	    {
	        onSuccess(xmlhttp.responseText);
	    }
	}
	xmlhttp.open('GET', url, true);
	xmlhttp.send();
}