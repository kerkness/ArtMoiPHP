$(function(){
    $("#contact_form").formValidation({

        framework: 'bootstrap',

        // Feedback icons
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields:{
            name:{
                validators:{
                    notEmpty:{
                        message: 'the name is required and cannot be empty.'
                    }
                }
            },
            email:{
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            message:{
                validators:{
                    notEmpty:{
                        message: "Message cannot be empty"
                    }
                }
            }


        }
    });

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
                $(formMessages).removeClass('alert alert-warning');
                $(formMessages).removeClass('alert alert-danger');
                $(formMessages).addClass('alert alert-success');
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
                $(formMessages).removeClass('alert alert-success');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).addClass('alert alert-warning');
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).addClass('alert alert-danger');
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
    })



});