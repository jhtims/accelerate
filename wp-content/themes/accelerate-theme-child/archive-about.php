<?php
/**
 * ABOUT PAGE ACCELERATE CHILD
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-banner-img">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<h3><a href="#">Accelerate</a> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->



<div id="primary" class="site-content">
		<div id="content" role="main">
            <div class="about-our-services">
            <h5>Our Services</h5>
            <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
            </div>

<?php while ( have_posts() ) : the_post(); 

 // Variables for Case Studies
    $item = get_field('item'); 
    $itempic = get_field('item_icon'); 
    $itempic_inv = get_field('item_icon_right');
    
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

                <figure class="about-item-img-inv">
                    <?php if($itempic_inv) { 
                         echo wp_get_attachment_image( $itempic_inv, $size ); ?>
                    <?php } ?>
                </figure> 

            </article>

			<?php endwhile; // end of the loop. ?>
        
        <section class="about-callout">
            <div class="callout-cntr">
            <div class="about-callout-desc">
                <h2>Interested in working with us?</h2>
            </div>
            <div class="contact-us-btn">
                <a href="#">Contact Us</a>
            </div>
            </div>
        </section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>