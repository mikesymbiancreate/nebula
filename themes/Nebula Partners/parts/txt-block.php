

<section id="txt-block" class="txt-block <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?>  <?php if( get_sub_field('unique_class') ): ?><?php the_sub_field('unique_class');?><?php endif;?> <?php if ( get_sub_field('border_top') ) : ?>border_top<?php endif; ?> <?php if ( get_sub_field('border_bottom') ) : ?>border_bottom<?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>');<?php endif ;?> <?php the_sub_field('custom_css');?>">

	<?php if ( get_sub_field('background_image') ) : ?><div class="border_top_masque"></div><?php endif; ?>

	<div class="container <?php the_sub_field('padding_container_options');?>">

		<div class="text hideme <?php if ( get_sub_field('halfbox') ) : ?>halfbox<?php else : ?><?php the_sub_field('width');?><?php endif; ?>">
			<?php if( get_sub_field('column_title') ): ?>
	        	<h2 class="column_title"><?php the_sub_field('column_title');?></h2>
			<?php endif;?>
			<div class="text-block <?php the_sub_field('column_options');?>">
				<?php the_sub_field('text-content');?>
			</div>
			<?php if( get_sub_field('column_footnote') ): ?>
	        	<p class="column_footnote"><?php the_sub_field('column_footnote');?></p>
			<?php endif;?>
		</div>

	</div>

	<?php if ( get_sub_field('overlay') ) : ?>
		<div class="overlay"></div>
	<?php endif; ?>

</section>
