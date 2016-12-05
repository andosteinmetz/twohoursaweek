<section>
	<article class="action">
		<div class="action-number">
			<div class="inner">
				<div>action</div>
				<div class="number"><?php echo $data->num(); ?></div>
			</div>
		</div>
		<main>
			<h3><?php echo ucfirst($data->title()->html()); ?></h3>
			<?php echo $data->intro_text()->markdown(); ?>
			<a class="read-more action-link">What you can do</a>
			<div class="further-info hidden">
				<?php echo $data->further_info()->markdown(); ?>
			</div>
		</main>
	</article>
</section>