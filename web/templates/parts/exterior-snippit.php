<section class="exterior-section row">
	<div class="small-12 columns">
		<h2>Exterior Work</h2>
		<p>Here is a quick look at some projects we've completed outside homes around Dallas, Texas.</p>
		<ul class="small-block-grid-2 medium-block-grid-4">
			<?php 
			$exteriorWorks = $allworks['exterior'];
			foreach ($exteriorWorks as $work) : ?>
				<li>
					<img src="/web/assets/img/loading.gif" data-original="/web/assets/img/works/<?php echo $work['thumb']; ?>" class="lazy" width="300" alt="<?php echo $work['title']; ?>" />
					<a href="<?php echo $work['link'] ?>" class="button secondary tiny">check out more <span class="more-btn">&raquo;</span></a>
				</li>
			<?php endforeach; ?>
			<!-- <li>
				<img src="/assets/img/loading.gif" data-original="http://lorempixel.com/300/300/" class="lazy" width="300" />
				<a href="#" class="button secondary tiny">check out more <span class="more-btn">&raquo;</span></a>
			</li>
			<li>
				<img src="/assets/img/loading.gif" data-original="http://lorempixel.com/300/300/" class="lazy" width="300" />
				<a href="#" class="button secondary tiny">check out more <span class="more-btn">&raquo;</span></a>
			</li>
			<li>
				<img src="/assets/img/loading.gif" data-original="http://lorempixel.com/300/300/" class="lazy" width="300" />
				<a href="#" class="button secondary tiny">check out more <span class="more-btn">&raquo;</span></a>
			</li>
			<li>
				<img src="/assets/img/loading.gif" data-original="http://lorempixel.com/300/300/" class="lazy" width="300" />
				<a href="#" class="button secondary tiny">check out more <span class="more-btn">&raquo;</span></a>
			</li> -->
		</ul>
	</div>
</section>