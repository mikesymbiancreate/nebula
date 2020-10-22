<?php 

/*  Template Name: Privacy Policy */

get_header(); ?>

<div class="wrapper">
    <div class="container home-container">



<section id="txt-block" class="txt-block privacy-policy">

	<div class="container">

		<div class="text three_quarter">

	        	<h2 class="column_title">Privacy Policy</h2>

			<div class="text-block">
				<?php if ( get_field('privacy_policy','option') ) : ?><?php the_field('privacy_policy','option');?><?php endif; ?>
			</div>

		</div>

	</div>

</section>
  </div>
</div>

<?php get_footer(); ?>