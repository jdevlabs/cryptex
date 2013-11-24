$(document).ready(function()
{
  $('#resetProgress').click(function(e)
  {
    // Show a modal

    $.ajax({
      //Show A Loader
      // beforeSend: function() {},

      //The Request
      type: "POST",
      url: "include\\login\\_login.php",
      data: $("#resetProgress").serialize(),
      success: function(data, tStatus)
      {
        // alert(data);
        if (data.indexOf("Successfully logged in") > 0 )
        {
          // We've logged in, now reload the page.
          // Everything else will be taken care of
          window.location.reload(true);
        }
        else
        {
          //Ooopsie
          $("#resetProgress").vibrate();
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
