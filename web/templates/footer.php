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
				<li><a href="<?php echo $url; ?>"<?php if(!is_null($class)) { echo $class; } ?>><?php echo $name; ?></a></li>
			<?php 
			} // off foreach  ?>
		</ul>
	</nav>
	<nav class="local-links">
		<ul>
			<?php 
			foreach ($locallinks as $name => $url) { ?>
				<li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
			<?php }
			?>
		</ul>
	</nav>
	<p><em>&copy;2014 all rights reserved</em></p>
	<p><em>M&amp;J Construction and Remodeling - Dallas, Texas home Contractors</em></p>
	<p class="ampnetlink"><em><a href="http://ampnetmedia.com" target="_blank"><span>ampnet(media)</span> | Dallas, Texas Web Design, Development, and SEO.</a></em></p>
</footer>
        
        <script src="/web/assets/js/main.min.js"></script>

        <?php if($is_contact) : ?>
		<script src="/web/assets/js/contact.min.js"></script>
    	<?php endif; ?>

        <script>
      		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      		ga('create', 'UA-9674179-13', 'mandjconstructionremodeling.com');
      		ga('send', 'pageview');

    </script>
    </body>
</html>