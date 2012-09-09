		<footer>
			<p><?php echo kirbytext($site->copyright()) ?></p>Made with <a href="http://getkirby.com">Kirby</a> and <em>♥</em>
		</footer>
	</div> <!-- end of #container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="/javascripts/libs/jquery.1.6.2.min.js"%3E%3C/script%3E'))</script>
	
	<script src="<?php echo url('assets/javascripts/script.js') ?>"></script>
	<script src="<?php echo url('assets/javascripts/libs/lastfm.js') ?>"></script>
	<script src="<?php echo url('assets/javascripts/libs/jquery.twitter.js') ?>"></script>
	<script src="<?php echo url('assets/javascripts/libs/jquery.nivo.slider.pack.js') ?>"></script>
	<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
    });
});
</script>
	
	<!--[if lt IE 7 ]>
		<script src="/javascripts/libs/dd_belatedpng.js"></script>
		<script> DD_belatedPNG.fix('img, .png_bg'); </script>
	<![endif]-->


	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-21249035-5']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	
</body>
</html>

