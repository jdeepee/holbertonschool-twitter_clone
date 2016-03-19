document.addEventListener("DOMContentLoaded", function() { 
	document.getElementById("button-load").addEventListener("click", load_more);
	function load_more(){
		ajaxGet('/statuses-1.html', function(text) {
			document.getElementById("extra_statuses").innerHTML = text;
		});
	}
});