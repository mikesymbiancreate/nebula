<section class="img-txt <?php the_sub_field('custom_class');?> <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?>">
	<div class="cont <?php the_sub_field('orientation');?> <?php the_sub_field('padding_options');?>">
		<div class="text">
			<div class="text-block">
        <?php echo wp_trim_words( the_sub_field('text'), 100, '...REDUCE COPY');?>
        <a href="<?php the_sub_field('button_link');?>" class="button <?php $variable = get_sub_field('theme_color','option'); if ($variable && $variable == 'light_theme') { echo 'button_rev';}?>"><?php the_sub_field('button_text');?></a>  
			</div>
		</div>

		<?php $images = get_sub_field('imgslider');
        	if( $images ): ?>

		<div id="imgslider" class="imgslider flexslider">
            <ul class="slides">
                <?php foreach( $images as $img ): ?>
                    <li>
                      <article>
                          <div class="featured">
                          	<img src="<?php echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>" />
                          </div>
                           <h5><?php echo $img['caption']; ?></h5> 
                      </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

	</div>
</section>