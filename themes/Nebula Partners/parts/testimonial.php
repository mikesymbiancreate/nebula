<section id="testimonial" class="<?php if ( get_sub_field('fullwidth','option') ) : ?>full_container<?php endif; ?>  testimonial <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>" <?php if ( get_sub_field('background_image') ):?>style="background: url('<?php the_sub_field('background_image');?>');"<?php endif ;?> <?php if ( get_sub_field('background_color') ):?>style="background-color: <?php the_sub_field('background_color');?>;"<?php endif ;?>>


	<div class="text <?php the_sub_field('width');?>">
		<span>&ldquo;</span>
		<div class="testi-block">
			<?php the_sub_field('quote');?>  
		</div>
		<?php if( get_sub_field('image') ): ?>
			<?php $image = get_sub_field('image'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		<?php endif;?>
		<cite><?php the_sub_field('author');?></cite>
	</div>
</section>
