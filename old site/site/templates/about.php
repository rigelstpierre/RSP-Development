<?php snippet('header') ?>
		<div id="main">
			<img src="assets/images/about-image.png">
			<aside>
				<h2><?php echo html($page->pagetitle()) ?></h2>
				<p><?php echo kirbytext($page->text()) ?></p>
			</aside>
		</div>
<?php snippet('footer') ?>
