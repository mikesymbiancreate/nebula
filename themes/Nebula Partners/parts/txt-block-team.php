<section id="txt-block" class="txt-block txt-block-team <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?>  <?php if( get_sub_field('unique_class') ): ?><?php the_sub_field('unique_class');?><?php endif;?> <?php if ( get_sub_field('border_top') ) : ?>border_top<?php endif; ?> <?php if ( get_sub_field('border_bottom') ) : ?>border_bottom<?php endif; ?>" style="<?php the_sub_field('custom_css');?>">

	<div class="container team-text">
		<div class="block-text hideme">
	        <h2 class="column_title"><?php the_sub_field('column_title');?></h2>
			<div class="expertise_sort">
				<a class="exp_btn active" id="prof_exp_btn"><span>Professional Services</span></a>
				<a class="exp_btn" id="comm_exp_btn"><span>Commerce & Industry</span></a>
				<a class="exp_btn" id="alt_exp_btn"><span>Alternative Investments</span></a>
				<a class="exp_btn" id="priv_exp_btn"><span>Private Client</span></a>
			</div>
			<div class="text">
				<div class="text-block">
					<div class="prof_blurb"><?php the_sub_field('prof_blurb');?></div>
					<div class="comm_blurb"><?php the_sub_field('comm_blurb');?></div>
					<div class="alt_blurb"><?php the_sub_field('alt_blurb');?></div>
					<div class="priv_blurb"><?php the_sub_field('priv_blurb');?></div>
				</div>
			</div>
		</div>

		<div class="mob-text">
	        <h2 class="column_title hideme"><?php the_sub_field('column_title');?></h2>

	        <hr>

			<h3>Professional Services</h3>
			<?php the_sub_field('prof_blurb');?>

			<hr>

			<h3>Commerce & Industry</h3>
			<?php the_sub_field('comm_blurb');?>

			<hr>
				
			<h3>Alternative Investments</h3>
			<?php the_sub_field('alt_blurb');?>

			<hr>

			<h3>Private Client</h3>
			<?php the_sub_field('priv_blurb');?>

		</div>

	</div>

</section>