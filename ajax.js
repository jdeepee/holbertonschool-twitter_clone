// Function to factorize AJAX request and response
function ajaxGet(url, onSuccess){ // function called ajaxGet that expects 2 arguments (url, onSuccess)
 	var buttonId = document.getElementById("button-load"); // defines what happens to button-load
  	buttonId.disabled = "true"; // gets disabled when time out
  	buttonId.style.cursor = "text"; 
  	buttonId.style.background = "#CDFFCB";

 	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() // For the Ajax call, use the method that uses readyState, because it's the only way to be compatible with IE8
	{
	    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	    {
	        onSuccess(xmlhttp.responseText); // onSuccess: a callback that will run after the call was successfully performed and that expects one argument; a string that contains what's in the file that was just fetched
	    }  
	}
	xmlhttp.open('GET', url, true); // url: a string that contains the local URL to be calling

	setTimeout(function(){ // set 2 sec time out before Ajax call is made
		xmlhttp.send();
  		buttonId.disabled = false;
  		buttonId.style.cursor = "default";
  	}, 2000);
}

// Reply button needs to work with extra statuses as well. Research what changes need be made to Ajax call for this to work.