$('#buyHint').click(function(e)
{
  $.ajax({
    type: "POST",
    url: "include/_hints.php",
    success: function(data, tStatus)
    {
      if (data.indexOf("CS:") > 0 )
      {
        // Update Avatar Popup
        matches = data.match(/CS:(\d+) HU:(\d+)/);
        $('#avScore').html($('#avScore').html().replace(/\d+/, matches[1]));
        $('#avHints').html($('#avHints').html().replace(/\d+/, matches[2]));

        // Hide the button
        $('#buyHint').hide();
        $('#cancHint').text("Okay");

        // Show Hint
        $('#hintText').html("<hr> " + data.replace(matches[0], ""));
      }
    },
    error:function(jqXHR, tStatus, errorThrown)
    {
      alert("Failure in ajax request");
    }
  });
});
