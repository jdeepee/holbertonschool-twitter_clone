<<<<<<< HEAD
document.addEventListener("DOMContentLoaded", reply) // callback function reply is called after page loaded so that reply button works
function reply() { // defines reply function
=======
// Need to make reply button work with extra statuses
document.addEventListener("DOMContentLoaded", function() {
// document.addEventListener(function() {    
>>>>>>> acda82abdbf9a7bcfe06565af3c85fd0ecb1a7f9
	var reply = document.querySelectorAll('.button-reply'); // find all elements with reply class
	var r = 0, r_length = reply.length; // create & set new vars to 0 and to number of reply btns (length)
		for (r; r < r_length; r++) { // iterates through all reply btns adding event listeners to each
		reply[r].addEventListener('click', function() { // when click is heard do the following:
		var parent = this.closest('.post-status-button-div');  // set target 1 for toggling
		var post = this.parentNode.nextElementSibling; // set target 2 for toggle
		post.toggle(); 
		parent.toggle();
		});
	}
<<<<<<< HEAD
};
=======
});
>>>>>>> acda82abdbf9a7bcfe06565af3c85fd0ecb1a7f9

