(function() {

	window.onload = () => {
		const loader = document.querySelector('.loader');
		if (loader) {
			setInterval(() => {
		       loader.classList.remove('preloader');
		    }, 500);
		}
		   
	};

})();