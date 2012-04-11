<?php snippet('header') ?>
		<div id="main">
			<section class="work">
				<h2><img src="assets/images/work.png" />WORK</h2>
					<div>
						<img src="assets/images/work/everlovin-thumb.png" />
					</div>
					<div>
						<img src="assets/images/work/dotkiwi-thumb.png" />
					</div>
					<div>
						<img src="assets/images/work/vimtrek-thumb.png" />
					</div>
					<div>
						<img src="assets/images/work/iconworldwide-thumb.png" />
					</div>
					<div>
						<img src="assets/images/work/fom-thumb.png" />
					</div>
					<div>
						<img src="assets/images/work/simpact-thumb.png" />
					</div>
			</section>
			<section class="about">
				<h2><img src="assets/images/about.png" />ABOUT</h2>
				<p><?php echo kirbytext($page->text()) ?></p>
			</section>
			<section class="twitter">
				<h2><img src="assets/images/twitter.png" />LATEST FROM TWITTER</h2>
				<div id="twitter"></div>
			</section>
			<section class="music">
				<h2><img src="assets/images/music.png" />MUSIC STREAM</h2>
				<div id="lastfm">
					<dl>
						<dd class="lfm_artist"></dd>
						<dd class="lfm_song">&nbsp; - &nbsp;'&nbsp;</dd>
						<dd class="lfm_album">'&nbsp;&nbsp;//&nbsp; </dd>
					</dl>
				</div>
			</section>
		</div>
<?php snippet('footer') ?>
