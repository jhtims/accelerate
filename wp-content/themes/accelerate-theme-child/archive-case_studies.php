<?php
/**
 * The template for displaying CASE STUDY ARCHIVE page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); 

 // Variables for Case Studies
    $services = get_field('services'); 
    $client = get_field('client');
    $site_link = get_field('site_link');
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $image_3 = get_field('image_3'); 
    
 // Needed for get_attachment
    $size = "full"; ?>

            <article class="case-study">

                <aside class="case-study-sidebar">
                    <h2><?php the_title(); ?></h2>
                    <p class="case-study-caption"><?php echo $services; ?></p>

                    <div class="case-study-desc"><?php the_excerpt(); ?></div>

                    <h6><a href="<?php echo $site_link; ?>">View Site &rsaquo;</a></h6>
                </aside>

                    <div class="case-study-images">
                        <?php if($image_1) { 
                            echo wp_get_attachment_image( $image_1, $size ); ?>
                        <?php } ?>
                    </div>
				
            </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>