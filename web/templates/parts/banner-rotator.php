<?php 
	require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/banner-data.php";
?>
<section class="main-banner">
	<div class="row">
		<ul class="main-banner-content" data-orbit data-options="timer_show_progress_bar:false;">
			<?php 
				foreach ($bannerdata as $key => $data) {
					?>
						<li data-orbit-slide="headline-<?php echo $key; ?>">
							<div class="small-12 medium-6 columns">
								<h2><?php echo $data['title']; ?></h2>
								<p><?php echo $data['desc']; ?></p>
								<a href="<?php echo $data['link']; ?>" class="button radius">See more &raquo;</a>
							</div>
							<div class="small-12 medium-6 columns img-wrap">
								<img src="/assets/img/loading.gif" data-original="<?php echo $data['img']; ?>" class="right lazy" />
							</div>
						</li>
					<?php
				} // off foreach
			?>
		</ul>
	</div>
</section>