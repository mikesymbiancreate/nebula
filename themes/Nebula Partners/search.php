<?php get_header(); ?>

<div class="wrapper">

    <?php include('sections/service_box.php'); ?>

    <div class="container">

        <div class="search_results">

            <?php the_content();?>

            <h3 class="pagetitle">We found <?php global $wp_query; echo $wp_query->found_posts; ?> results for your search.</h3>

		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
        
        	<article>
                    <div class="featured">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(
                            get_post_type(),
                            'secondary-image'
                            ); endif; ?>
                        <div class="layer"></div>
                    </a>
                    </div>

                <div class="details">      
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <p class="relevancy"><span><?php echo "Relevance Score: <strong>$post->relevance_score</strong>"; ?> </span></p> 
                    <p class="user"><?php echo get_the_term_list( $post->ID, 'user'); ?> </p>
                    <p class="centre"><?php echo get_the_term_list( $post->ID, 'centre'); ?></p>
                    <p><?php the_excerpt(); ?></p> 
                    <p class="read_more"><a href="<?php the_permalink(); ?>">Read More</a></p> 
                </div>       

            </article><!-- #post -->    
            <?php endwhile; ?>
    	   <?php endif; ?>

        </div>
	</div>
</div>
 
<?php get_footer(); ?>