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
        // window.location.reload(true);

        // Update Avatar Popup
        alert($('#avLevel').html().replace("/[0-9]/", "duff"));

        // Disale Buy Button
        $('#buyHint').attr("disabled", "disabled");
      }
    },
    error:function(jqXHR, tStatus, errorThrown)
    {
      alert("Failure in ajax request");
    }
  });
});
