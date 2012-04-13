<?php snippet('header') ?>
		<div id="main">
			<section class="portfolio">
				<h2><img src="assets/images/work.png" /><?php echo html($page->pagetitle()) ?></h2>
				<div>
					<div class="work-item">
						<a href="<?php echo url('/portfolio/everlovin') ?>">Everlovin' Press</a>
						<img src="<?php echo url('assets/images/work/everlovin-thumb.png') ?>"/>
					</div>
					<div class="work-item">
						<a href="">Dot Kiwi</a>
						<img src="<?php echo url('assets/images/work/dotkiwi-thumb.png') ?>" />
					</div>
					<div class="work-item">
						<a href="#">VIM Trek</a>
						<img src="<?php echo url('assets/images/work/vimtrek-thumb.png') ?>" />
					</div>
					<div class="work-item">
						<a href="#">ICON Worldwide</a>
						<img src="<?php echo url('assets/images/work/iconworldwide-thumb.png') ?>" />
					</div>
					<div class="work-item">
						<a href="#">FOM</a>
						<img src="<?php echo url('assets/images/work/fom-thumb.png') ?>" />
					</div>
					<div class="work-item">
						<a href="#">SIMpact</a>
						<img src="<?php echo url('assets/images/work/simpact-thumb.png') ?>" />
					</div>
				</div>
			</section>
		</div>
<?php snippet('footer') ?>
