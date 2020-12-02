$( document ).ready( function () {

    $('#form-login').submit( function() {
        alertClear();
        if ( verifyField( '#form-login-email', 'Please provide your email address.' ) &&
             verifyField( '#form-login-password', 'Please provide your password.' ) )
        {
            var form = $('#form-login');
            var loginURL = form.attr( 'action' );
            var loginParameters = form.serializeArray();

            buttonDisable( form );

            $.post( loginURL, loginParameters )
                .done( function( data ) {
                    window.location.href = $('#form-login-redirect').val();
                })
                .fail( function( data ) {
                    alertWarning( 'Invalid email or password.' );
                    buttonEnable( form );
                });
        }
        return false;
    });

    $('#form-forgot').submit( function() {
        alertClear();
        if ( verifyField( '#form-forgot-email', 'Please provide your email address.' ) )
        {
            var form = $('#form-forgot');
            var loginURL = form.attr( 'action' );
            var loginParameters = form.serializeArray();

            buttonDisable( form );

            $.post( loginURL, loginParameters )
                .done( function( data ) {
                    if ( data.success )
                    {
                        alertSuccess( 'An email has been sent with details for your account. Please follow the instructions in the email. If you do not see the email, please check your spam folder.' );
                    }
                    else
                    {
                        alertWarning( data.message );
                        buttonEnable( form );
                    }
                    //console.log( data );
                });
        }
        return false;
    });

    $('#form-join').submit( function() {
        alertClear();
        if ( !$('#form-join-tos').is(':checked') )
        {
            alertWarning( 'Please review Terms of Service before continuing.' );
            return false;
        }
        if ( verifyField( '#form-join-email', 'Please provide your email address.' ) &&
             verifyField( '#form-join-first', 'Please provide your first name.' ) &&
             verifyField( '#form-join-last', 'Please provide your last name.' ) &&
             verifyField( '#form-join-password', 'Please provide your password.' ) )
        {
            var form = $('#form-join');
            var loginURL = form.attr( 'action' );
            var loginParameters = form.serializeArray();

            buttonDisable( form );

            $.post( loginURL, loginParameters )
                .done( function( data ) {
                    if ( data.success )
                    {
                        alertSuccess( 'You are now registered. An email has been sent with details for your account. Please follow the instructions in the email. If you do not see the email, please check your spam folder.' );
                    }
                    else
                    {
                        alertWarning( data.message );
                        buttonEnable( form );
                    }
                    //console.log( data );
                });
        }
        return false;
    });

    function alertClear()
    {
        $('#login-alert').hide();
    }

    function alertSet( message, alertClass )
    {
        $('#login-alert').removeClass('alert-danger alert-success').addClass(alertClass);
        $('#login-alert').text(message).show();
    }

    function alertSuccess( message )
    {
        alertSet( message, 'alert-success' );
    }

    function alertWarning( message )
    {
        alertSet( message, 'alert-danger' );
    }

    function buttonDisable( form )
    {
        form.find('button').prop('disabled', true);
    }

    function buttonEnable( form )
    {
        form.find('button').prop('disabled', false);
    }

    function verifyField( fieldId, message )
    {
        var field = $(fieldId).val();
        if ( field == null || field == '' )
        {
            alertWarning( message );
            return false;
        }
        return true;
    }

});