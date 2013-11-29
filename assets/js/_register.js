$(document).ready(function()
{
  // $msg = $("#alertMsg");
  $('#regForm').submit(function(e)
  {
    // Clear all previous error states
    $('.form-group').removeClass('has-error');
    $('input').popover('hide');

    // Get values from the form
    uname = $('#username').val();
    full = $('#fullname').val(); email = $('#email').val();
    pass = $('#password').val(); cpass = $('#cpass').val();

    // alert(pass + "  " + cpass);
    // Password matching
    if (pass != cpass)
    {
      $("#password").parent().addClass('has-error');
      $("#cpass").parent().addClass('has-error');
      $("#cpass").popover('toggle');
      return e.preventDefault();
    }

    $.ajax({
      //The Request
      type: "POST",
      url: "include\\register\\_register.php",
      data: $("#regForm").serialize(),
      success: function(data, tStatus)
      {
        if ( data.indexOf("Email already exists") != -1 )
        {
          $('#email').parent().addClass('has-error');
          $('#email').popover('toggle');
          return e.preventDefault();
        }
        else if ( data.indexOf("Username already exists") != -1 )
        {
          $('#username').parent().parent().addClass('has-error');
          $('#username').popover('toggle');
          return e.preventDefault();
        }
        alert("success: " + data);
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
