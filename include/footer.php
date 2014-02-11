</div>  <!-- The Container Ends -->
  <div id="push"></div>
</div>

  <div id="footer">
    <div class="container">
      <!-- The Flawless Freeware Faction -->
      <p class="muted credit" align="right">Designed by the 3F's for Algorhythm'14</p>
      <!-- <p class="muted credit">
      Developed By:
      <a href="https://github.com/dufferzafar">Shadab Zafar</a>,
      <a href="https://github.com/hammadhaleem">Hammad Haleem</a>,
      <a href="https://github.com/zishanAhmad">Zishan Ahmad</a>,
      <a href="https://github.com/rootAvish">Avishkar Gupta</a>
      <a href="https://github.com/anzalkhan">Anzal Khan</a>
      <a href="https://github.com/trigonaminima">Shivam Rana</a>
      </p> -->
    </div>
  </div>

  <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/bootbox.min.js"></script>
  <script type="text/javascript" src="assets/js/vibrate.js"></script>

  <!-- Todo: PP - Merge all these files into one -->
  <script type="text/javascript" src="assets/js/_login.js"></script>
  <script type="text/javascript" src="assets/js/_register.js"></script>
  <script type="text/javascript" src="assets/js/_click-handlers.js"></script>
  <script type="text/javascript" src="assets/js/_hints.js"></script>
  <script src="assets/js/jqBootstrapValidation.js"></script>
  <!-- Todo: PL - Move this into a js file -->

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
