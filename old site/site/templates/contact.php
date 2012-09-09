<?php snippet('header') ?>
		<div id="main">
			<div class="contact">
				<h2><?php echo html($page->pagetitle()) ?></h2>
				<p><?php echo html($page->text()) ?></p>
				<form>
					<input type="text" placeholder="Your full name" />
					<input type="email" placeholder="Your email address" />
					<textarea placeholder="Your message..." ></textarea>
					<input type="submit" value="Submit Message" /> 
				</form>
			</div>
		</div>
<?php snippet('footer') ?>
