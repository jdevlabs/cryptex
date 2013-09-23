$(document).ready(function()
{
	$msg = $("#alertMsg");
	$('#submitForm').submit(function(e)
	{

		uName = $('#uName').val(); pass = $('#pass').val();

		// Empty Fields
		// if (uName == '')
		// 	$msg.addClass('alert-error').html("<strong>Username :</strong> Is that the best you can come up with?").show();
		// else if (pass == '')
		// 	$msg.addClass('alert-error').html("<strong>Passwords :</strong> Think of something.").show();

		$.ajax({
			//Show A Loader
			// beforeSend: function() {},

			//The Request
			type: "POST",
			url: "db.login.php",
			data: $("#submitForm").serialize(),
			success: function(data, tStatus)
			{
				alert("success: " + data);
			},
			error:function(jqXHR, tStatus, errorThrown)
			{
				alert("failure");
			}
			// error: function(jqXHR, tStatus, errorThrown) {}
		});

		// $msg.addClass('alert-success').html("<strong>Congratulations!</strong> You've successfully registered.").show();
		return e.preventDefault();
	});
});