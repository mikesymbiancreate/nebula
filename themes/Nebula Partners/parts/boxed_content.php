<section id="boxed_content" class="<?php if ( get_sub_field('fullwidth','option') ) : ?>full_container<?php endif; ?>  boxed_content <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>');<?php endif ;?> <?php the_sub_field('custom_css');?>">

      	<div class="container">
            <div class="content" <?php if ( get_sub_field('position','option') ) : ?> style="float:<?php the_sub_field('position','option');?>"<?php endif ;?>>
                <div class="textbox <?php if ( get_sub_field('theme_color','option') ) : ?><?php the_sub_field('theme_color','option');?><?php endif ;?>">
                  <h2><?php the_sub_field('title');?></h2>
                  <p><?php the_sub_field('subtitle');?></p>
                  <a href="<?php the_sub_field('button_link');?>" class="button <?php $variable = get_sub_field('theme_color','option'); if ($variable && $variable == 'light_theme') { echo 'button_rev';}?>"><?php the_sub_field('button_text');?></a>
                </div>
            </div>
        </div>

            <div class="film <?php $variable = get_sub_field('theme_color','option'); if ($variable && $variable == 'light_theme') { echo 'film_dark';}?>"></div>

</section>