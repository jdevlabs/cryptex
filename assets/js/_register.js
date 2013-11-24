$(document).ready(function()
{
	$('#submitForm').submit(function(e)
	{
		uName = $('#uName').val(); name = $('#name').val();
		pass = $('#pass').val(); cPass = $('#cPass').val();

		$.ajax({
			//The Request
			type: "POST",
			url: "db\\_register.php",
			data: $("#submitForm").serialize(),
			success: function(data, tStatus)
			{
				alert("success: " + data);
			},
			error:function(jqXHR, tStatus, errorThrown)
			{
				alert("failure");
			}
		});

		return e.preventDefault();
	});
});
