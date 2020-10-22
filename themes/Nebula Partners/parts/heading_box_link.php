<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
         
<section id="heading_box" class="<?php if ( get_sub_field('fullwidth')) : ?>full_container<?php endif; ?> heading_box <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('height_options');?> <?php the_sub_field('unique_class');?> <?php if ( get_sub_field('white_bg')) : ?>white_bg<?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;<?php endif ;?>; background-color: <?php the_sub_field('heading_box_color');?>">

    <div class="heading <?php if ( get_sub_field('top-page') ) : ?>top-page<?php endif; ?>">
        <h1><?php the_sub_field('heading_box_heading');?></h1>
        <?php if ( get_sub_field('heading_box_text') ):?><p><?php the_sub_field('heading_box_text');?></p><?php endif ;?>

        <?php if ( get_sub_field('white_bg') ):?>
            <div class="no_position">
                <div class="heading_next">
                    <div></div>
                </div>
            </div>
        <?php endif ;?>

    </div>

    <?php if ( get_sub_field('overlay') ) : ?>
        <div class="overlay"></div>
    <?php endif; ?>

</section>
