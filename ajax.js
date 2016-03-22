// Function to factorize AJAX request and response
function ajaxGet(url, onSuccess){ // function called ajaxGet that expects 2 arguments (url, onSuccess)
 	var buttonId = document.getElementById("button-load"); // defines what happens to button-load
  	buttonId.disabled = "true"; // button-load gets disabled during time out after click
  	buttonId.style.cursor = "text"; // cursor changes so user knows it's unclickable
  	buttonId.style.background = "#CDFFCB"; // button-load changes color when clicked

 	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() // For the Ajax call, use the method that uses readyState, because it's the only way to be compatible with IE8
	{
	    if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
	    {
	        onSuccess(xmlhttp.responseText); // onSuccess: a callback that will run after the call was successfully performed and that expects one argument; a string that contains what's in the file that was just fetched
	    	reply(); // calling reply function again after extra statuses are loaded so that reply button works on them too
	    }    
	}
	xmlhttp.open('GET', url, true); // url: a string that contains the local URL to be calling

	setTimeout(function(){ // set 2 sec time out before Ajax call is made, ie when user clicks on button-load, time out for 2 sec
		xmlhttp.send();
  		buttonId.disabled = false;
  		buttonId.style.cursor = "default";
  	}, 2000); // time out set to 2000 ms
}
