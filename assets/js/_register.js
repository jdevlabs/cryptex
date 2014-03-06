$(document).ready(function()
{
  // $msg = $("#alertMsg");
  $('#regForm').submit(function(e)
  {
    // Clear all previous error states
    $('.form-group').removeClass('has-error');
    $('input, legend').popover('hide');

    // Get values from the form
    uname = $('#username').val();
    full = $('#fullname').val();
    gender = $('#gender').val();
    email = $('#email').val();
    pass = $('#password').val(); cpass = $('#cpass').val();

    // Password matching
    if (pass != cpass)
    {
      $("#password").parent().addClass('has-error');
      $("#cpass").parent().addClass('has-error');
      $("#cpass").popover('toggle');
      return e.preventDefault();
    }

    $.ajax({
      type: "POST",
      url: "include/_register.php",
      data: $("#regForm").serialize(),
      success: function(data, tStatus)
      {
        //Todo: Auto-Login after valid registeration?
        if ( data.indexOf("Registeration Successful") != -1 )
        {
          // alert('Okay.');
          document.location.href='/cryptex/index.php';
        }
        else if ( data.indexOf("Email already exists") != -1 )
        {
          $('#email').parent().addClass('has-error');
          $('#email').popover('toggle');
        }
        else if ( data.indexOf("Username already exists") != -1 )
        {
          $('#username').parent().parent().addClass('has-error');
          $('#username').popover('toggle');
        }
        else if ( data.indexOf("Please enter a valid email address") != -1 )
        {
          $('#email').parent().addClass('has-error');
          $('#email').popover('toggle');
        }
        else
        {
          $('legend').popover('toggle');
          // alert(data);
        }
      },
      error:function(jqXHR, tStatus, errorThrown)
      {
        alert("failure: " + errorThrown);
      }
    });

    // $msg.addClass('alert-success').html("<strong>Congratulations!</strong> You've successfully registered.").show();
    return e.preventDefault();
  });
});
