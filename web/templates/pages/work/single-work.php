<?php
$workname = explode('/', $workname);
$workname = $workname[1];
$int_works = $allworks['interior'];
$ext_works = $allworks['exterior'];
foreach ($int_works as $key => $data) {
	if($key == $workname) {
		$work = $data;
	}
}
foreach ($ext_works as $key => $data) {
	if($key == $workname) {
		$work = $data;
	}
}
?>
<section class="single-work innerpage row">
	<h1 class="small-12 medium-12 columns"><?php echo $work['title']; ?></h1>
		
	<article class="about-full small-12 medium-6 columns">
		<?php 
			if(isset($work['desc'])) {
				echo $work['desc'];
			}
		?>

	<h3>Gallery</h3>
	<ul class="clearing-thumbs" data-clearing>
	<?php 
		$gall_arr = $work['gallery'];
		foreach ($gall_arr as $photo) : ?>
		<li>
			<a href="/web/assets/img/works/<?php echo $photo; ?>.jpg" class="th radius">
				<img src="/web/assets/img/works/<?php echo $photo; ?>-thumb.jpg" alt="<?php echo $work['title']; ?>" width="100" />
			</a>
		</li>
		<?php endforeach;
	?>
	</ul>
	</article>
	<div class="img-wrap small-12 medium-6 columns">
		<img src="/web/assets/img/works/<?php echo $work['thumb']; ?>" alt="M and J Construction and Remodeling in Dallas, Texas." />
	</div>
</section>
