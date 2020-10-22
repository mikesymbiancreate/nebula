<section class="img-txt <?php the_sub_field('border_options');?>">
	<div class="cont <?php the_sub_field('orientation');?>">
		<div class="text <?php the_sub_field('text-width');?>">
			<div class="text-block">
				<?php the_sub_field('text');?>  
			</div>
		</div>
		<div class="img <?php the_sub_field('img-width');?>">  
			<?php $image = get_sub_field('image'); if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
	</div>
</section>
