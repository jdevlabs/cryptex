$(document).ready(function()
{
  /**
   * Reset user's progress.
   * First ask for confirmation though...
   */
  $('#resetProgress').click(function(e)
  {
    bootbox.dialog({
      message: "Once you go ahead, you will lose your saved progress and will be redirected back to level one. <br><br> So, are you really sure? ",
      title: "Are you sure?",
      buttons: {
        danger: {
          label: "Yes, I Am!",
          className: "btn-danger",
          callback: function() {
            $.ajax({
              type: "POST",
              url: "include/_reset.php",
              success: function(data, tStatus)
              {
                if (data.indexOf("Reset Successful") > 0 )
                {
                  // alert(data);
                  window.location.assign("index.php"); // Goto home.
                }
              },
              error:function(jqXHR, tStatus, errorThrown)
              {
                alert("Failure in ajax request");
              }
            });
          }
        },
      main: {
          label: "Nah! just kidding around...",
          className: "btn-primary"
        },
      }
    });

    return e.preventDefault();
  });

  /**
   * Logout User
   */

  $('#logout').click(function(e)
  {
    $.ajax({
      type: "POST",
      url: "include/_logout.php",
      success: function(data, tStatus)
      {
        if (data === "Logout Successful" ) {
          window.location.reload(true);
        }
      },
      error:function(jqXHR, tStatus, errorThrown)
      {
        alert("Failure in ajax request");
      }
    });

    return e.preventDefault();
  });

  /**
   * Show modal dialog boxes.
   */

  $('#navHint').click(function(e)
  {
    $('#hintsModal').modal('show');
    return e.preventDefault();
  });

  $('#navContact').click(function(e)
  {
    $('#contactModal').modal('show');
    return e.preventDefault();
  });

});
