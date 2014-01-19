$('#buyHint').click(function(e)
{
  $.ajax({
    type: "POST",
    url: "include/_hints.php",
    success: function(data, tStatus)
    {
      if (data.indexOf("HintText - ") > 0 )
      {
        $('#hintText').html(data);
      }
      else
      {
        alert(data);
      }
    },
    error:function(jqXHR, tStatus, errorThrown)
    {
      alert("Failure in ajax request");
    }
  });
});
