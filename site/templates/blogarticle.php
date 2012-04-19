<?php snippet('header') ?>
		<div id="main">
			<article>
			    <h2><?php echo html($page->title()) ?></h2>
			    <?php echo kirbytext($page->text()) ?>

			    <a href="<?php echo url('blog') ?>">Back…</a>

			  </article>
		</div>
<?php snippet('footer') ?>
