<?php if( !$data->text()->empty() ): ?>
<div id="freeform" class="wrapper border">
	<div class="inner-wrap">
		<h2><?php echo $data->title()->html(); ?></h2>
		<article>
			<?php echo $data->text()->kirbytext(); ?>
		</article>
	</div>
</div>
<?php endif; ?>