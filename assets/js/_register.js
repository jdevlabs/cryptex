$(document).ready(function()
{
  // $msg = $("#alertMsg");
  $('#regForm').submit(function(e)
  {
    uName = $('#uname').val();
    full = $('#full').val(); email = $('#email').val();
    pass = $('#pass').val(); cPass = $('#pass').val();

    // Empty Fields
    // if (uName == 'duffer')
      // $("#uname").addClass('error');

      // alert(uname.val());

    // else if (full == '')
    //  $msg.addClass('alert-error').html("<strong>full :</strong> Don't you have a full or something?").show();
    // else if (pass == '')
    //  $msg.addClass('alert-error').html("<strong>Passwords :</strong> Think of something.").show();
    // //Both Passwords are equal
    // else if (pass != cPass)
    //  $msg.addClass('alert-error').html("<strong>Passwords :</strong> Passwords don't match bud!").show();

    $.ajax({
      //The Request
      type: "POST",
      url: "include\\register\\_register.php",
      data: $("#regForm").serialize(),
      success: function(data, tStatus)
      {
        alert("success: " + data);
      },
      error:function(jqXHR, tStatus, errorThrown)
      {
        alert("failure: " + errorThrown);
      }
    });

    // $msg.addClass('alert-success').html("<strong>Congratulations!</strong> You've successfully registered.").show();
    return e.preventDefault();
		// return e.preventDefault();
  });
});
