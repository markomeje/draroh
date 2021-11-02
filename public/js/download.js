(function ($) {

    'use strict';

    $('.download-book-form').submit(function(event){
        event.preventDefault();
        var form = $(this);
        var button = $('.download-book-button');
        var spinner = $('.download-book-spinner');
        var message = $('.download-book-message');
        button.attr('disabled', true);
        spinner.removeClass('d-none');
        message.hasClass('d-none') ? '' : message.fadeOut();

        $.ajax({
            url: form.attr('data-action'),
            method: form.attr('method'),
            data: form.serializeArray(),
            success: function(response) {
                if (response.status === 0) {
                    if($.isEmptyObject(response.error)){
                        handleButton(button, spinner);
                        message.removeClass('d-none alert-success').addClass('alert-danger');
                        message.html(response.info).fadeIn();
                    }else{
                        handleButton(button, spinner);
                        handleErrors(response.error);
                    }
                }else if(response.status === 1) {
                    handleButton(button, spinner);
                    message.removeClass('d-none alert-danger').addClass('alert-success');
                    alert(response.info);
                    message.html(response.info).fadeIn();
                    window.location.href = response.redirect;
                }else {
                    handleButton(button, spinner);
                    alert('Network error. Try again.');
                }
            },
            error: function() {
                handleButton(button, spinner);
                alert('Network error. Try again.');
            }
        });
    });

})(jQuery);
