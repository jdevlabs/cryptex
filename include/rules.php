<?php  
    if($_SESSION['level']==1) { ?>
      <script>
      $(document).ready(function() { 
		    $('#rulesModal').modal('show');
		    $('#rulesModal').on('show.bs.modal', function()
		     {
		        $("#rulesModal").focus();
		     }
		  )
	  });
      </script>
  <?php }  ?>
