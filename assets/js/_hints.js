$('#buyHint').click(function(e)
{
  $.ajax({
    type: "POST",
    url: "include/_hints.php",
    success: function(data, tStatus)
    {
      if (data.indexOf("HintText:") > 0 )
      {
        //Todo: Regex the shit out of 'data' - Extract hintText, score, hints

        // Show Hint
        $('#hintText').html("<hr> " + data.replace("HintText:", ""));

        // Update Avatar Popup
        // $('#avLevel').html().replace(/\d/, "duff");
        // $('#avLevel').html().replace(/\d/, "duff");
      }
    },
    error:function(jqXHR, tStatus, errorThrown)
    {
      alert("Failure in ajax request");
    }
  });
});
