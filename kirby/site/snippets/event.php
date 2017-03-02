<article class="event border">
	<div class="event__date">
		<div class="inner">
			<?php echo strftime( '%A', $page->date(null, 'datetime') );?><br>
			<div class="event__day-month"><?php echo strftime( '%B %d,', $page->date(null, 'datetime') );?></div><br>
			<!--<?php echo strftime( '%Y', $page->date(null, 'datetime') );?><br>-->
		</div>
	</div>
	<div class="event__main">
		<header>
			<h2><a href="<?php echo $page->url();?>"><?php echo $page->title()->html(); ?></a></h2>
			<span class="event__time"><?php echo strftime( '%l:%M%p', $page->date(null, 'datetime') );?></span>
		</header>
		<section class="event__description">
			<?php echo $page->description()->kirbytext(); ?>
			<?php echo $page->location()->kirbytext(); ?>
			<a href="#" class="event__read-more"></a>
		</section>
		<section class="event__links">
			<?php 
				$hasMapLink = !$page->map_link()->empty(); 
				if($hasMapLink) : ?>
				<strong><a class="map-link" href="<?php echo $page->map_link()->value(); ?>" target="_blank">MAP</a></strong>&nbsp;&nbsp;&nbsp;
			<?php endif; ?>
			<?php if($hasMapLink) { echo '</a>';} ?>
			<?php if(!$page->rsvp_link()->empty()): ?><strong><a class="event__rsvp-link" href="<?php echo $page->rsvp_link()->value(); ?>" target="_blank">RSVP</a></strong><?php endif; ?>
		</section>
	</div>
</article>