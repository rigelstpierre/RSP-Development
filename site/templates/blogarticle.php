<?php snippet('header') ?>
		<div id="main">
			<article>
			    <h1><?php echo html($page->title()) ?></h1>
			    <?php echo kirbytext($page->text()) ?>

			    <a href="<?php echo url('blog') ?>">Back…</a>

			  </article>
		</div>
<?php snippet('footer') ?>
