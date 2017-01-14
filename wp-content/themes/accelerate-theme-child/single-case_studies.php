<?php
/**
 * The template for displaying all case study pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
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
                    <p class="case-study-client">Client: <?php echo $client; ?></p>

                    <p class="case-study-desc"><?php the_content(); ?></p>

                    <p><strong><a href="<?php echo $site_link; ?>">Site Link</a></strong></p>
                </aside>

                    <div class="case-study-images">
                        <?php if($image_1) { 
                            echo wp_get_attachment_image( $image_1, $size ); ?>
                        <?php } ?>

                        <?php if($image_2) { 
                            echo wp_get_attachment_image( $image_2, $size ); ?>
                        <?php } ?>

                        <?php if($image_3) { 
                            echo wp_get_attachment_image( $image_3, $size ); ?>
                        <?php } ?>
                    </div>
				
            </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
