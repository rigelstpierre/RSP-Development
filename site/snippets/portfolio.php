		<div id="main">
			<section class="portfolio-item">
				<h3><strong>CLIENT: <?php echo html($page->client()) ?></strong> | <?php echo html($page->worktype()) ?></h3>
				<p><?php echo html($page->text()) ?></p>
				<a class="styled" href="<?php echo html($page->link()) ?>">Visit Site</a>
				<div class="slider-wrapper theme-default">
		       		<div id="slider" class="nivoSlider">
		       			<img src="<?php echo url('assets/images/slide-show-holder.png') ?>" alt="" />
		        	</div>
		    	</div>
		    	<div style="clear: both;"></div>
			</section>
		</div>