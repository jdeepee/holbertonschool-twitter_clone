document.addEventListener("DOMContentLoaded", function() { // wait til page is loaded
	HTMLElement.prototype.toggle = function() { 
	   if (this.classList.contains("hidden")) { // if element is hidden, remove hidden.
	    this.classList.remove('hidden');
	  } else {
	    this.classList.add('hidden'); // else add hidden
	  }
	}
});
