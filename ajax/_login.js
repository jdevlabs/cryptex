$(document).ready(function()
{
	$msg = $("#alertMsg");
	$('#submitForm').submit(function(e)
	{

		uName = $('#uName').val(); pass = $('#pass').val();

		$.ajax({
			//Show A Loader
			// beforeSend: function() {},

			//The Request
			type: "POST",
			url: "include\\login\\_login.php",
			data: $("#submitForm").serialize(),
			success: function(data, tStatus)
			{
				// alert(data);
        if (data == "Successfully logged in")
        {
          // We've logged in, now reload the page.
          // Everything else will be taken care of
          window.location.reload(true);
        }
        else
        {
          //Ooopsie
          // alert("Booyah!");
          // $msg.addClass('alert-error').html("<strong>Passwords :</strong> Think of something.").show();
          // $("#submitForm").effect("shake");
          // var conf = { frequency: 5000,  spread: 5,  duration: 500  };
          $("#login").vibrate();
        }
			},
			error:function(jqXHR, tStatus, errorThrown)
			{
				alert("failure in ajax request");
			}
		});

		return e.preventDefault();
	});
});
