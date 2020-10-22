<?php get_header(); ?>
<?php get_header(); ?>

<div class="wrapper category_page">

    <?php include('sections/service_box.php'); ?>

    <div class="container">

        <div class="row">
            <div class="column col-xs-12">

                <div class="category_image" style="background-color: <?php if ( is_category( array( 'care-homes','community-access', 'care-homes', 'day-centres', 'enablement', 'equipment', 'finances', 'handy-preson', 'life-skills', 'nursing-homes', 'outreach', 'safe-connected', 'shared-lives', 'work-experience' ))) { echo '#007BB7';} else { echo '#19763A';}?>">

<?php  if( has_post_thumbnail() ) { the_post_thumbnail();
} elseif ( is_category( 'care-homes' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/care-homes.png"/>';
} elseif ( is_category( 'community-access' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/inde.png"/>';
} elseif ( is_category( 'day-centres' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/day-centres.png"/>';
} elseif ( is_category( 'enablement' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/enablement.png"/>';
} elseif ( is_category( 'equipment' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/equipment.png"/>';
} elseif ( is_category( 'finances' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/finances.png"/>';
} elseif ( is_category( 'handy-person' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/handyman.png"/>';
} elseif ( is_category( 'life-skills' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/life-skills.png"/>';
} elseif ( is_category( 'nursing-homes' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/nursing-homes.png"/>';
} elseif ( is_category( 'outreach' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/outreach.png"/>';
} elseif ( is_category( 'safe-connected' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/safe-connected.png"/>';
} elseif ( is_category( 'shared-lives' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/shared-lives.png"/>';
} elseif ( is_category( 'work-experience' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/work-experience.png"/>';
} elseif ( is_category( 'art-design' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/art-design.png"/>';
} elseif ( is_category( 'crafts' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/crafts.png"/>';
} elseif ( is_category( 'drama' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/drama.png"/>';
} elseif ( is_category( 'excursions' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/excursions.png"/>';
} elseif ( is_category( 'gardening' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/gardening.png"/>';
} elseif ( is_category( 'health' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/well.png"/>';
} elseif ( is_category( 'leisure' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/leisure.png"/>';
} elseif ( is_category( 'music' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/music.png"/>';
} elseif ( is_category( 'nutrition' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/nutrition.png"/>';
} elseif ( is_category( 'photography' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/photography.png"/>';
} elseif ( is_category( 'stay-active' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/active.png"/>';
} elseif ( is_category( 'support-groups' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/support-groups.png"/>';
} elseif ( is_category( 'technology' ) ) { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/tech.png"/>';
} else { echo '<img src="' . get_bloginfo('template_directory') . '/assets/img/therapy.png"/>';
}
?>
                </div>

                <div class="category_text">
                    <h2><?php single_cat_title('');?></h2>
                </div>


            </div>
        </div>


        <div class="row flex-row">
  
    <?php $args = array( 'post_type' => 'service', 'cat' => get_query_var('cat'), 'orderby' => 'title', 'order' => 'DESC' );
    query_posts($args);
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

            <article>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="featured">
                        <?php if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(
                            get_post_type(),
                            'secondary-image'
                            ); endif; ?>

                        <div class="layer"></div>

                        <div class="button-container <?php  if( in_category( 'independence' ) ) { echo 'inde-bg'; } else { echo 'well-bg';}?> ">               
                            <?php echo get_the_term_list( $post->ID, 'category'); ?>
                        </div>
                    </div>
                </a>

                <div class="details">      
                   <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> 
                    
            <?php if ( get_the_term_list( $post->ID, 'user') ) :?>
            <p class="user"><?php echo get_the_term_list( $post->ID, 'user', ' '); ?></p>
            <?php endif;?>

             <?php if ( get_the_term_list( $post->ID, 'centre') ) :?>
            <p class="centre"><?php echo get_the_term_list( $post->ID, 'centre'); ?></p>
            <?php endif;?>

                    <p><?php the_excerpt(); ?></p> 
                    <p class="read_more"><a href="<?php the_permalink(); ?>">Read More</a></p>          
                </div>       

            </article><!-- #post --> 

<?php endwhile;
else :
    echo wpautop( 'Sorry, no Services! were found' );
endif;
?>	
        </div>
	</div>
</div>
 
<?php get_footer(); ?>