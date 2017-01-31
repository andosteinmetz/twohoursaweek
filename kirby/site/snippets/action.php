<section>
	<article class="action <?php echo $data->action_type(); ?>">
		<div class="action-number">
			<div class="inner">
				<div>action</div>
				<div class="number"><?php echo $data->num(); ?></div>
			</div>
		</div>
		<main>
			<h3><?php echo ucfirst($data->title()->html()); ?></h3>
			<?php echo $data->intro_text()->kirbytext(); ?>
			<a href="<?php echo $data->url(); ?>" class="read-more action-link">What you can do <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<div class="further-info">
				<?php echo $data->further_info()->kirbytext(); ?>
			</div>
		</main>
		<?php // if($data->status_message()) { echo '<div class="status-message">' . $data->status_message()->html() . '</div>';} ?>
	</article>
</section>