</div>  <!-- The Container Ends -->
  <div id="push"></div>
</div>

  <div id="footer">
    <div class="container">
      <!--
      Jamia Developer Labs :

      We are a group of people who believe in DOING stuff.
      -->
      <p class="muted credit" align="right">Designed by <a href="https://github.com/orgs/jdevlabs" target="_blank">JDevLabs</a> for Algorhythm'14</p>
      <!--
      Developers:
      <a href="https://github.com/dufferzafar">Shadab Zafar</a>,
      <a href="https://github.com/hammadhaleem">Hammad Haleem</a>,
      <a href="https://github.com/rootAvish">Avishkar Gupta</a>,
      <a href="https://github.com/zishanAhmad">Zishan Ahmad</a>,
      <a href="https://github.com/kwikadi">Aditya Kumar</a>,
      <a href="https://github.com/sharanagrawal">Sharan Agrawal</a>,
      <a href="https://github.com/trigonaminima">Shivam Rana</a>

      If code excites you as much as it does us, we will be open-sourcing the entire code of cryptex once the contest ends.
      It will be available here: https://github.com/orgs/jdevlabs/cryptex
      -->
    </div>
  </div>

  <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/bootbox.min.js"></script>
  <script type="text/javascript" src="assets/js/vibrate.js"></script>

  <script type="text/javascript" src="assets/js/_click-handlers.js"></script>
  <script type="text/javascript" src="assets/js/_hints.js"></script>
  <script type="text/javascript" src="assets/js/jqBootstrapValidation.js"></script>

  <script>
  $('[data-toggle="tooltip"]').tooltip({
    'trigger': 'manual', 'placement': 'right'
  });

  $('[data-toggle="popover"]').popover({
    'trigger': 'manual', 'placement': 'right', 'html': true
  });

  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

  <?php if($firstTime) { ?>
      $(document).ready(function() {
        $('#rulesModal').modal('show');
      });
  <?php } ?>
  </script>

</body>
</html>