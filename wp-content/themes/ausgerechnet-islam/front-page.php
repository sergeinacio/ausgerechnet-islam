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
	</div><!-- .site-content -->
	<div id="weg-zu-islam" class="bg-silver">
		<div class="site-content">
			<div class="col-12">
				<h4 class="uppercase center-text">Metamorphose - mein Weg zum Islam</h4>
				<p>Eine Zusammenfassung der Vorgeschichte und der Zeit zwischen meiner Begegnung mit dem Islam im April 2010 und dem ersten regulären Blogeintrag im März 2011.</p>
				<p><strong>Die Ausgangslage</strong></p>
				<p>Bevor ich hier von meiner unerwarteten, ungebetenen und keineswegs herbei gewünschten Verwandlung erzähle, will ich kurz meine Person und in groben Zügen mein Leben bis zu diesem Ereignis beschreiben.</p>
				<p>Ich bin eine ganz gewöhnliche Schweizerin im gesetzten Alter von 58 Jahren. Ich lebe seit bald 20 Jahren mit meinem Mann in dessen Heimatland im Süden Europas, wir haben zwei erwachsene Söhne, die nicht mehr bei uns im Haus wohnen, ein eigenes kleines Geschäft und ein paar Hunde. Wir haben im Großen und Ganzen ein sorgloses Dasein.</p>
				<p>Meine allgemeine Einstellung zum Leben war geprägt durch einen schweren Autounfall, den  ich in jungen Jahren entgegen der Prognosen der Ärzte nicht nur überlebte, sondern... <a href="#">Weiter lesen &raquo;</a></p>
			</div>
		</div> <!-- .site-content -->
	</div><!-- .bg-silver -->
	<div id="das-buch-home">
		<div class="site-content-small">
			<div class="col-8">
				<h4 class="uppercase center-text">Das Buch zum Blog:</h4>
				<p>Ein Buch, das Konvertierten „oh-ja!“-, geborenen Muslimen „aha“- und Nichtmuslimen „ach-so!“-Erlebnisse bescheren wird. Und inschaAllah allen einfach viel Freude beim Lesen.</p>
			</div>
			<div class="col-4-last">
				<img style="width: 100%; height: auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/das-buch.jpg" alt="">
			</div>
		</div> <!-- .site-content -->
	</div><!-- .bg-silver -->
</section><!-- .home-page -->

<?php get_footer(); ?>
