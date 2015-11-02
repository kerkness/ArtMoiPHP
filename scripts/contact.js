$(function(){
    var form = $("#contact_form");
    $(form).submit(function(event){
        event.preventDefault();
        var formData = $(form).serialize();
        var formMessages = $('#form-messages');

        $.ajax({
            type:"POST",
            url: $(form).attr('action'),
            data:formData
        })
            .done(function(response){
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name').val('');
                $('#phone').val('');
                $('#email').val('');
                $('#message').val('');
            })
            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
    })

});