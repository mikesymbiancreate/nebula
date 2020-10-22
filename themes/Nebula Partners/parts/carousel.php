<section id="product-carousel" class="product-carousel <?php the_sub_field('border_options');?> <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>">

    <?php if ( get_sub_field('fullwidth','option') ) : ?>
    <div class="full_container">
    	<div class="container">
      <?php endif; ?>
      	
          <?php
          $images = get_sub_field('carousel');
          $custom_url = get_post_meta( $post->ID, 'custom_url' );
          if( $images ): ?>

            <div id="carousel" class="flexslider carousel">
                <ul class="slides">
                    <?php foreach( $images as $img ): ?>
                        <li>
                          <article>
                              <div class="featured">
                              <a href="<?php echo $img['caption']; ?>"><img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" srcset="<?php echo $img['sizes']['large'];?> 768w, <?php echo $img['sizes']['medium_large'];?> 400w" /></a>
                              </div>

                              <div class="details">      
                                 <h4><?php echo $img['title']; ?></h4> 
                                 <a href="<?php echo $img['caption']; ?>" class="read_more">BOOK A VIEWING</a> 
                            </div> 
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

          <?php endif; ?>

    <?php if ( get_sub_field('fullwidth','option') ) : ?>
    </div>
  </div>
  <?php endif; ?>

</section>