(function() {

	window.onload = function() {
		const loader = document.querySelector('.loader');
		if (loader) {
			setInterval(function() {
		       loader.classList.remove('preloader');
		    }, 500);
		}
	};

})();

function handleButton(button, spinner) {
    button.attr('disabled', false);
    spinner.addClass('d-none');
}

function handleErrors(errors) {
    $.each(errors, function(field, message) {
        var element = $('.'+field);
        var span = $('.'+field+'-error');
        element.addClass('is-invalid');
        span.html(message);
        element.focus(function() {
            element.removeClass('is-invalid');
            span.html('');
        });
    });
}