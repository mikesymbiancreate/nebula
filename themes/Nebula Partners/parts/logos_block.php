<section id="logos_block" class="<?php if ( get_sub_field('width') ) : ?><?php the_sub_field('width');?><?php endif; ?> <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> hideme <?php the_sub_field('unique_class');?>">


		<?php if( get_sub_field('column_title') ): ?>
	        <h2 class="column_title"><?php the_sub_field('column_title');?></h2>
		<?php endif;?>

		<div class="clear"></div>

       	<?php if( have_rows('logos_block') ): ?>
			<?php while( have_rows('logos_block') ): the_row();
				$image = get_sub_field('logo');
			?>

	       <a class="" <?php if ( get_sub_field('logos_link') ) : ?>href="<?php the_sub_field('logos_link');?>"<?php endif; ?>>
	        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
	    	</a>
		<?php endwhile; ?><?php endif; ?>

</section>