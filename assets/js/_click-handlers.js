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
              url: "include\\_reset.php",
              success: function(data, tStatus)
              {
                // alert(data);
                if (data.indexOf("Reset Successful") > 0 )
                  window.location.reload(true);
                else
                {
                  //Ooopsie
                  //Todo: Handle any sort of ajax error that could occur.. could it?
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
   *
   * Note: An ajax request to logout the user? doesn't make much sense, does it?
   */

  $('#logout').click(function(e)
  {
    $.ajax({
      type: "POST",
      url: "include\\_logout.php",
      success: function(data, tStatus)
      {
        // alert(data);
        if (data.indexOf("Logout Successful") > 0 )
          window.location.reload(true);
        else
        {
          //Ooopsie
          //Todo: Handle any sort of ajax error that could occur.. could it?
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
