<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
  <form id="form">
    <h2 class="display-5">Register</h2>
      <div class="form-group">
        <label for="user">Username</label>
        <input id="user" name="user" type="text" value="" class="form-control" aria-describedby="user" placeholder="Enter username">
        <small id="name" class="form-text text-muted">Input the username of your choice</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" value="" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        
        <small id="emailHelp" class="form-text text-muted">Input your email</small>
      </div>
      <button type="submit" value="Send" class="btn btn-primary">register</button>
      <p id="response"></p>
  </form>
  <p id="message"></p>
</div>
    <script>
    // Variable to hold request
    var request;

    // Bind to the submit event of our form
    $("#form").submit(function(event) {

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "form.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function(response, textStatus, jqXHR) {
            // Log a message to the console
            document.getElementById("message").innerHTML = response;
        });

        // Callback handler that will be called on failure
        request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function() {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    });


    // Bind to the submit event of our form
    $("#email").keyup(function(event) {

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "verification.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function(response, textStatus, jqXHR) {
            // Log a message to the console
            document.getElementById("response").innerHTML = response;
        });

        // Callback handler that will be called on failure
        request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function() {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    });

    // user check
    $("#user").keyup(function(event) {

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "verification-name.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function(response, textStatus, jqXHR) {
            // Log a message to the console
            document.getElementById("response").innerHTML = response;
        });

        // Callback handler that will be called on failure
        request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function() {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    });
    
    </script>
</body>

</html>