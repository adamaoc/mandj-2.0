<footer class="sitefooter row">
	<nav class="footer-links">
		<ul>
			<?php 

foreach ($footerlinks as $name => $url) {
	$class = NULL;
	if($_SERVER['REQUEST_URI'] == $url) {
		$class = ' class="active"';
	} 
	?>
	<li><a href="<?php echo $url; ?>"<?php if(!is_null($class)) { echo $class; } ?>><?php echo $name; ?></a>
<?php 
} // off foreach  ?>
		</ul>
	</nav>
	<p><em>&copy;2014 all rights reserved</em></p>
	<p><em>M&amp;J Construction and Remodeling - Dallas, Texas home Contractors</em></p>
	<p class="ampnetlink"><em><a href="http://ampnetmedia.com"><span>ampnet(media)</span> | Dallas, Texas Web Design, Development, and SEO.</a></em></p>
</footer>

        <?php //<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> ?>
        
        
        <script src="/web/assets/js/main.min.js"></script>

        <?php if($is_contact) : ?>
		<script src="/web/assets/js/contact.min.js"></script>
    	<?php endif; ?>

        <script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-9674179-2']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
        </script>
    </body>
</html>