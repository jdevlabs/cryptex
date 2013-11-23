$(document).ready(function()
{
  $('#navHint').click(function(event) {
    $('#hintsModal').modal('show');
    event.preventDefault();
  });

  $('#navContact').click(function(event) {
    $('#contactModal').modal('show');
    event.preventDefault();
  });
});
