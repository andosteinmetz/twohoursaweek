<article class="event border">
	<div class="event__date">
		<div class="inner">
			<?php echo strftime( '%A', $page->date(null, 'datetime') );?><br>
			<div class="event__day-month"><?php echo strftime( '%B %d,', $page->date(null, 'datetime') );?></div><br>
			<!--<?php echo strftime( '%Y', $page->date(null, 'datetime') );?><br>-->
			<?php echo strftime( '%l:%M%p', $page->date(null, 'datetime') );?><br>
		</div>
	</div>
	<div class="event__main">
	<header>
		<h2><?php echo $page->title()->html(); ?></h2>
	</header>
	<section>
		<?php echo $page->description()->kirbytext(); ?>
	</section>
	</div>
</article>