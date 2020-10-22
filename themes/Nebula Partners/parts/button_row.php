<section id="button_row" class="<?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>">

       	<?php if( have_rows('button_row') ): ?>
			<?php while( have_rows('button_row') ): the_row(); 
			$text = get_sub_field('button_text');
			$link = get_sub_field('button_link');
			$type = get_sub_field('button_type');
			?>

	        <a class="button_row" id="<?php the_sub_field('button_link');?>">
	            <div class="target">
	            	<span><?php the_sub_field('button_text') ;?></span>
	            	<div class="bullseye <?php the_sub_field('button_type') ;?>"></div>
	            </div>
	    	</a>
		<?php endwhile; ?><?php endif; ?>

</section>

<section id="txt-block" class="txt-block button-row-txt-block border_bottom" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>');<?php endif ;?>">
		<div class="border_top_masque"></div>

		<div class="container">
			<div class="text halfbox">
				<div class="text-block box-one visible"><?php the_sub_field('box-one');?></div>
				<div class="text-block box-two"><?php the_sub_field('box-two');?></div>
				<div class="text-block box-three"><?php the_sub_field('box-three');?></div>
				<div class="text-block box-four"><?php the_sub_field('box-four');?></div>
			</div>

			<div class="sidebox">
				<h3>Team Members</h3>
				<div class="sidebox-one visible"><?php the_sub_field('sidebox-one');?></div>
				<div class="sidebox-two"><?php the_sub_field('sidebox-two');?></div>
				<div class="sidebox-three"><?php the_sub_field('sidebox-three');?></div>
				<div class="sidebox-four"><?php the_sub_field('sidebox-four');?></div>
			</div>

		</div>

</section>