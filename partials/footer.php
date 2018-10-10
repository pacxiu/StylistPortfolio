		<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo $assets; ?>/dist/js/app.js"></script> 

		<script type="text/javascript">
		
			$(document).ready( function() {
				<?php if($pg=='index') { ?>
					IndexModule.init();
				<?php } ?>
			});
			
		</script>
    </body>
</html>
