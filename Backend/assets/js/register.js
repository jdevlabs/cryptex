$(document).ready(function()
{
	$msg = $("#alertMsg");
	$('#submitForm').submit(function(e)
	{

		uName = $('#uName').val(); name = $('#name').val();
		pass = $('#pass').val(); cPass = $('#cPass').val();

		// Empty Fields
		// if (uName == '')
		// 	$msg.addClass('alert-error').html("<strong>Username :</strong> Is that the best you can come up with?").show();
		// else if (name == '')
		// 	$msg.addClass('alert-error').html("<strong>Name :</strong> Don't you have a name or something?").show();
		// else if (pass == '')
		// 	$msg.addClass('alert-error').html("<strong>Passwords :</strong> Think of something.").show();
		// //Both Passwords are equal
		// else if (pass != cPass)
		// 	$msg.addClass('alert-error').html("<strong>Passwords :</strong> Passwords don't match bud!").show();

		// alert($(this).serialize())

		// $msg.addClass('alert-success').html("<strong>Congratulations!</strong> You've successfully registered.").show();
		return e.preventDefault();
	});
});