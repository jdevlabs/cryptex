$('#buyHint').click(function(e)
{
  $.ajax({
    type: "POST",
    url: "include/_hints.php",
    success: function(data, tStatus)
    {
      if (data.indexOf("HintText:") > 0 )
      {
        // Show Hint
        $('#hintText').html("<hr> " + data.replace("HintText:", ""));

        // Done so that the avatar popup is updated.
        window.location.reload(true);
      }
    },
    error:function(jqXHR, tStatus, errorThrown)
    {
      alert("Failure in ajax request");
    }
  });
});
