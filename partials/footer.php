      <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
      <script type="text/javascript" src="<?php echo $assets; ?>/dist/js/app.js"></script> 

  		<script type="text/javascript">
  		
  			$(document).ready( function() {
  				<?php if($pg=='contact') { ?>
  					ContactModule.init();
  				<?php } ?>
          <?php if($pg=='project') { ?>
            ProjectModule.init();
          <?php } ?>
  			});
  			
  		</script>
    </body>
</html>
