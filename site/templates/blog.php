<?php snippet('header') ?>

		<div id="main">
  
  		<?php foreach($page->children()->visible()->flip() as $article): ?>
  
  			<article>
				<a href="<?php echo $article->url() ?>"><h2><?php echo html($article->title()) ?></h2></a>
				<span><p>POSTED <?php echo $article->date('j F Y') ?></p></span>
				<hr />
				<p><?php echo excerpt($article->text(), 300) ?></p>
				<a href="#"></a>
			</article>

  		<?php endforeach ?>

		</div>

<?php snippet('footer') ?>