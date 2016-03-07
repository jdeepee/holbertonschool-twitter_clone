document.addEventListener("DOMContentLoaded", function() { 
	document.getElementById("post-status-btn").addEventListener("click", postpre);
	function postpre() { // call toggle function on poststatusbtn
		var elem = document.getElementById('statuspost');
		elem.toggle(); // call toggle on div containing new status post
		var elem = document.getElementById('post-status-btn');
		elem.toggle();
	}
});
