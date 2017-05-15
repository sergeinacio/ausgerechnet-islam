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
	<div id="das-buch-home" class="bg-silver">
		<div class="site-content">



			<div class="vertical-tabs-container">
			  <div class="vertical-tabs">
			    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab is-active" rel="tab1">Das Buch</a>
			    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab2">Leseprobe</a>
			    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab3">Item 3</a>
			    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab4">Item 4</a>
			  </div>

			  <div class="vertical-tab-content-container">
			    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active" rel="tab1">Item 1</a>
			    <div id="tab1" class="js-vertical-tab-content vertical-tab-content">
						<div class="col-8">
							<h4 class="uppercase center-text">Das Buch zum Blog:</h4>
							<p>"Ein Buch, das Konvertierten „oh-ja!“-, geborenen Muslimen „aha“- und Nichtmuslimen „ach-so!“-Erlebnisse bescheren wird. Und inschaAllah allen einfach viel Freude beim Lesen."</p>
						</div>
						<div class="col-4-last">
							<img style="width: 100%; height: auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/das-buch.jpg" alt="">
						</div>
			    </div>

			    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab2">Leseprobe</a>
			    <div id="tab2" class="js-vertical-tab-content vertical-tab-content" style="height: inherit; overflow-y: scroll">
			      <h6>Es ist ein Rätsel:</h6>
						<p>Da ist eine Frau, Schweizerin, bald 60, Sprachlehrerin, mit beiden Füßen fest im Leben stehend, intelligent, emanzipiert, selbständig. Sie lebt mit ihrem Mann in einer wunderschönen Gegend in Südeuropa, hat Haus, Garten, genug Freizeit und viele Hobbies. Mit Religion hat sie nichts am Hut – im Gegenteil, sie ist eingefleischte Agnostikerin und der festen Überzeugung, Glaube sei nur etwas für schlichtere Gemüter.</p>
						<p>Und plötzlich fängt sie an, von Gott zu faseln. Von Allah. Von Wahrheit.</p>
						<p>Was ist geschehen? Nein, sie hat keinen muslimischen Liebhaber. Weder ist sie in einer Sekte gelandet, noch ist da jemand, der sie beeinflusst - sie ist auch gar nicht der Typ, der sich leicht für etwas einnehmen ließe, dazu ist sie viel zu eigenständig.</p>
						<p>Während ihre Angehörigen und Freunde rätseln, ob sie wohl psychologische oder gar psychiatrische Hilfe braucht, beginnt sie, zu bloggen.</p>
			    </div>

			    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab3">Item 3</a>
			    <div id="tab3" class="js-vertical-tab-content vertical-tab-content">
			      <p>Donec mattis mauris gravida metus laoreet non rutrum sem viverra. Aenean nibh libero, viverra vel vestibulum in, porttitor ut sapien. Phasellus tempor lorem id justo ornare tincidunt. Nulla faucibus, purus eu placerat fermentum, velit mi iaculis nunc, bibendum tincidunt ipsum justo eu mauris. Nulla facilisi. Vestibulum vel lectus ac purus tempus suscipit nec sit amet eros. Nullam fringilla, enim eu lobortis dapibus, quam magna tincidunt nibh, sit amet imperdiet dolor justo congue turpis.</p>
			    </div>

			    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab4">Item 4</a>
			    <div id="tab4" class="js-vertical-tab-content vertical-tab-content">
			      <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus dui urna, mollis vel suscipit in, pharetra at ligula. Pellentesque a est vel est fermentum pellentesque sed sit amet dolor. Nunc in dapibus nibh. Aliquam erat volutpat. Phasellus vel dui sed nibh iaculis convallis id sit amet urna. Proin nec tellus quis justo consequat accumsan. Vivamus turpis enim, auctor eget placerat eget, aliquam ut sapien.</p>
			    </div>
			  </div>
			</div>



		</div> <!-- .site-content -->
	</div><!-- .bg-silver -->
</section><!-- .home-page -->

<?php get_footer(); ?>
