$(document).ready(function() {
    if (typeof $.fn.validate === 'undefined') {
        toastr.error('jQuery Validation Plugin is not loaded correctly.');
        return;
    }

    // Validate the form
    $("#loginForm").validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            username: {
                required: "Please enter your username",
                minlength: "Your username must consist of at least 3 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            }
        },
        submitHandler: function(form) {
            // AJAX request
            $.ajax({
                url: 'login-process.php',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    // Handle success response
                    toastr.success('Login successful!');
                    // You can redirect or do other actions here
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    toastr.error('Login failed: ' + xhr.responseText);
                }
            });
            return false; // Prevent the form from submitting via the browser
        }
    });
});
