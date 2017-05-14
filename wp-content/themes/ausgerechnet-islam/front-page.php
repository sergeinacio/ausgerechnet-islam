<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header( 'home' ); ?>

<section class="home-page">
	<div class="site-content">
		<h4 class="uppercase center-text">Meine letzten einträge:</h4>
		<?php query_posts('posts_per_page=3&post_type=post'); ?>
		<div class="cards">
		<?php while ( have_posts() ) : the_post(); ?>
		  <div class="card">
		    <div class="card-image">
		      <a href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail( 'medium' ); ?>" alt="">
					</a>
		    </div>
		    <div class="card-header">
		      <a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
		    </div>
		    <div class="card-copy">
		      <p><?php the_excerpt(); ?></p>
		    </div>
		  </div>
		<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- .container -->
</section><!-- .home-page -->

<?php get_footer(); ?>
