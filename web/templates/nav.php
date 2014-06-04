<?php 

foreach ($navlinks as $name => $url) {
	$class = NULL;
	if($_SERVER['REQUEST_URI'] == $url) {
		$class = ' class="active"';
	} 
	?>
	<li><a href="<?php echo $url; ?>"<?php if(!is_null($class)) { echo $class; } ?>><?php echo $name; ?></a></li>
<?php 
} // off foreach 
?>