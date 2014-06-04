<?php 
$interiorWorks = $allworks['exterior'];
foreach ($interiorWorks as $work) : 
	$gallery = $work['gallery'];
	$gallery_count = count($gallery);
	?>
	<li>
		<a href="<?php echo $work['link'] ?>" class="row">
			<img src="/web/assets/img/loading.gif" data-original="/web/assets/img/works/<?php echo $work['thumb']; ?>" class="lazy small-6 medium-2 columns" width="300" alt="<?php echo $work['title']; ?>" />

			<h3 class="small-6 medium-10 columns"><?php echo $work['title'] ?></h3>
			<p class="small-12 medium-10 columns">[total photos: <?php echo $gallery_count; ?>]</p>
		</a>
	</li>
<?php endforeach; ?>