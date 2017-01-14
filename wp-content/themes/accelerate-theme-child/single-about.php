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
    $item = get_field('item'); 
    $itempic = get_field('item_icon'); 
    
 // Needed for get_attachment
    $size = "full"; ?>

            <article class="about-item">

                <figure class="about-item-img">
                    <?php if($itempic) { 
                        echo wp_get_attachment_image( $itempic, $size ); ?>
                    <?php } ?>
                </figure>

                <aside class="about-item-desc">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </aside>

            </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

