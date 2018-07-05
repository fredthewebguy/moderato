<?php
/*
Template Name: Footer Template
*/
?>

		<!-- begin footer -->
		<footer>
			&copy;<?php echo date('Y') ?>&nbsp;&nbsp;&middot;&nbsp;&nbsp;FredTheWebGuy
		</footer><!-- # footer -->

		<!-- begin promo panel -->
		<div id="promoPanel">
			<span id="closePromoPanel" tabindex="-1">+</span>
			Here's that disclaimer where I mention my site uses cookies.
		</div><!-- # promo panel -->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-89167202-1', 'auto');
		  ga('send', 'pageview');
		</script>

		<?php wp_footer(); ?>

	</body>

</html>