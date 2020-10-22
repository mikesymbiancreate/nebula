<section id="constellation" class="constellation <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php if( get_sub_field('white_bg') ): ?>white_bg<?php endif; ?> <?php if( get_sub_field('unique_class') ): ?><?php the_sub_field('unique_class');?><?php endif;?> <?php if ( get_sub_field('border_top') ) : ?>border_top<?php endif; ?> <?php if ( get_sub_field('border_bottom') ) : ?>border_bottom<?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>');<?php endif ;?> <?php the_sub_field('custom_css');?>">

	<?php if ( get_sub_field('background_image') ) : ?><div class="border_top_masque"></div><?php endif; ?>


		<div class="constellation_box">
	       	<?php if( have_rows('stars') ): ?>
				<?php while( have_rows('stars') ): the_row();
					$star_number = get_sub_field('star_number');
					$star_title = get_sub_field('star_title');
				?>

				<a class="star star_<?php echo $star_number; ?>"></a>
				<span class="star_title star_title_<?php echo $star_number; ?>"><?php echo $star_title; ?></span>
			<?php endwhile; ?><?php endif; ?>

			 <?php if( get_sub_field('title') ): ?><h2 class="title"><?php the_sub_field('title');?></h2><?php endif ;?>

			 <div class="line left_line"></div>
			 <div class="line right_line"></div>
		</div>

		<div class="star_text_box">
			<div class="star_text">

	       	<?php if( have_rows('stars_text') ): ?>
				<?php while( have_rows('stars_text') ): the_row();
					$number = get_sub_field('stars_text_number');
					$title = get_sub_field('stars_text_title');
					$content = get_sub_field('stars_text_content');
				?>

				<div class="star_text_<?php echo $number; ?>">
						<h2><?php echo $title; ?></h2>
						<?php echo $content; ?>
				</div>
			<?php endwhile; ?><?php endif; ?>

				<div class="star_circle">
						<a class="close"></a>
				</div>
			</div>
		</div>

</section>
