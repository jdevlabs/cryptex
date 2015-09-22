</div>  <!-- The Container Ends -->
  <div id="push"></div>
</div>

  <div id="footer">
    <div class="container">
      <p class="muted credit" align="right">Made with <span class="glyphicon glyphicon-heart"></span> in <a href="http://github.com/jdevlabs/cryptex/">PHP</a> by <a href="http://github.com/dufferzafar/" target="_blank">@dufferZafar</a> and <a href="https://github.com/jdevlabs/cryptex/graphs/contributors">friends</a>.</p>
      <!--
        Developers:

          Shadab Zafar   - https://github.com/dufferzafar
          Hammad Haleem  - https://github.com/hammadhaleem
          Avishkar Gupta - https://github.com/rootAvish
          Zishan Ahmad   - https://github.com/zishanAhmad
          Aditya Kumar   - https://github.com/kwikadi
          Sharan Agrawal - https://github.com/sharanagrawal
          Shivam Rana    - https://github.com/trigonaminima
      -->
    </div>
  </div>

  <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/bootbox.min.js"></script>
  <script type="text/javascript" src="assets/js/vibrate.js"></script>

  <script type="text/javascript" src="assets/js/_login.js"></script>
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
