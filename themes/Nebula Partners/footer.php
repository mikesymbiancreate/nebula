<footer id="footer">

	<div class="container">
		<div class="row">
			<div class="c-3">
			   <?php the_field('address','option');?>
			</div>  

			<div class="c-3">
				<!--<ul id="social-icons">
                	<?php if ( get_field('fb_link','option') ) :?><li><a href="<?php the_field('fb_link','option');?>" class="social-icon"><i class="fa fa-facebook"></i></a></li><?php endif ;?>
                	<?php if ( get_field('tw_link','option') ) :?><li><a href="<?php the_field('tw_link','option');?>" class="social-icon"><i class="fa fa-twitter"></i></a></li><?php endif ;?>
                	<?php if ( get_field('pinterest_link','option') ) :?><li><a href="<?php the_field('pinterest_link','option');?>" class="social-icon"><i class="fa fa-pinterest"></i></a></li><?php endif ;?>
                	<?php if ( get_field('youtube_link','option') ) :?><li><a href="<?php the_field('youtube_link','option');?>" class="social-icon"><i class="fa fa-youtube"></i></a></li><?php endif ;?>
                	<?php if ( get_field('linkedin_link','option') ) :?><li><a href="<?php the_field('linkedin_link','option');?>" class="social-icon"><i class="fa fa-linkedin"></i></a></li><?php endif ;?>
                	<?php if ( get_field('instagram_link','option') ) :?><li><a href="<?php the_field('instagram_link','option');?>" class="social-icon"><i class="fa fa-instagram"></i></a></li><?php endif ;?>
                	<?php if ( get_field('googleplus_link','option') ) :?><li><a href="<?php the_field('googleplus_link','option');?>" class="social-icon"><i class="fa fa-google-plus"></i></a></li><?php endif ;?>
           	 	</ul>-->

           	 	<?php if ( get_field('linkedin_link','option') ) :?>
           	 		<a href="<?php the_field('linkedin_link','option');?>" class="social-icon">
           	 			<img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/linkedin.png" alt="Follow us on Linkedin"/>
           	 		</a>
           	 	<?php endif ;?>
			</div>

			<div class="c-3 copyright">
			   <?php the_field('copyright-text','option');?>
			</div>
		</div>
	</div>
</footer>

<a id="to_the_top" class="top">
	<span>To the top</span>
	<img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/arrowup.png" alt="to the top">
	<div class="oval"></div>
</a>

<?php wp_footer(); ?>

</body> 