<section class="trio-box <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('columns');?> <?php the_sub_field('unique_class');?>" <?php if ( get_sub_field('background_option') ):?>style="background: url('<?php the_sub_field('background_option');?>');"<?php endif ;?>>

	<?php if ( get_sub_field('title') ) : ?>
	<div class="row">
		<h2 class="title hideme"><?php the_sub_field('title');?></h2>
	</div>
	<?php endif; ?>

	<div class="cont">

		<?php if( have_rows('trio_blocks') ): ?>
			<?php while( have_rows('trio_blocks') ): the_row(); 
			$title = get_sub_field('title');
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			$content = get_sub_field('content');
			?>

		<article class="trio-box-block hideme">
			<div class="featured">
				<?php if ( get_sub_field('link') ) : ?><a href="<?php the_sub_field('link');?>"><?php endif;?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>" />
					<div class="layer"></div>
				<?php if ( get_sub_field('link') ) : ?></a><?php endif;?>
			</div>
			<div class="details">
				<h3><?php if ( get_sub_field('link') ) : ?><a href="<?php the_sub_field('link');?>"><?php endif;?><?php the_sub_field('title'); ?><?php if ( get_sub_field('link') ) : ?></a><?php endif;?></h3>
				<p><?php the_sub_field('content');?></p>
				<?php if ( get_sub_field('button_text') ) : ?><a href="<?php the_permalink(); ?>"><?php the_sub_field('button_text');?></a><?php endif;?>          
			</div>
		</article>
     

	<?php endwhile; ?><?php endif; ?>

	</div>

</section>