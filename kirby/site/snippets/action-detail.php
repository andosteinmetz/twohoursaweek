<article class="action <?php echo $page->action_type(); ?>">
	<div class="action-number">
		<div class="inner">
			<div>action</div>
			<div class="number"><?php echo $page->num(); ?></div>
		</div>
	</div>
	<main>
		<h3><?php echo ucfirst($page->title()->html()); ?></h3>
		<?php echo $page->intro_text()->kirbytext(); ?>
		<span class="read-more action-link">What you can do</span>		
		<?php echo $page->further_info()->kirbytext(); ?>
	</main>
	<?php // if($page->status_message()) { echo '<div class="status-message">' . $page->status_message()->html() . '</div>';} ?>
</article>