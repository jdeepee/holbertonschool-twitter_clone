document.addEventListener("DOMContentLoaded", function() { 
	document.getElementById("button-load").addEventListener("click", load_more); // when user clicks on 'See more statuses' button, function load_more is called 
	function load_more(){
		ajaxGet('statuses-1.html', function(text) { // an Ajax call is made to the file with path /statuses-1.html
			document.getElementById("extra_statuses").innerHTML = text; // extra statuses are loaded ie injected  into empty div with ID "extra_statuses" in index.html, using innerHTML
		});
	}
});

// For the Ajax call, use the method that uses readyState, because it's the only way to be compatible with IE8
// "Reply" JavaScript feature on newly loaded statuses must work 