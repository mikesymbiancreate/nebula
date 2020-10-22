<section id="contact-cta-banner" class="full_container contact-cta-banner <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>" style="<?php if ( get_sub_field('background_option') ):?>background: url('<?php the_sub_field('background_option');?>');<?php endif ;?> <?php the_sub_field('custom_css');?>">

	<?php if ( get_sub_field('alignment') == ('right') ) : ?> <div class="container"> <?php endif; ?>
	
	<?php if ( get_sub_field('alignment') == ('right') ) : ?>
	<div class="title">
		<?php if ( get_sub_field('title') ):?><h1><?php the_sub_field('title');?></h1><?php endif; ?>
        <?php if ( get_sub_field('subtitle') ):?><h2><?php the_sub_field('subtitle');?></h2><?php endif; ?> 
	</div>
	<?php endif; ?>
		
	<div class="cont <?php the_sub_field('alignment');?>">
		<div class="contact_form"> 
			<?php the_sub_field('contact_wysiwyg');?>
		</div>
	</div>

	<?php if ( get_sub_field('alignment') == ('right') ) : ?> </div> <?php endif; ?>
</section>
