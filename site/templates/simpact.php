<?php snippet('header') ?>
		<div id="main">
			<section class="portfolio-item">
				<h3><strong>CLIENT: <?php echo html($page->client()) ?></strong> | <?php echo html($page->worktype()) ?></h3>
				<p><?php echo html($page->text()) ?></p>
				<div class="slider-wrapper theme-default">
		       		<div id="slider" class="nivoSlider">
		       			<img src="<?php echo url('assets/images/work/simpact-01.png') ?>" alt="" />
		       			<img src="<?php echo url('assets/images/work/simpact-02.png') ?>" alt="" />
		        	</div>
		    	</div>
		    	<div style="clear: both;"></div>
			</section>
		</div>		
<?php snippet('footer') ?>
