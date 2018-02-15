<?php
/**
 * Template Name: Integra_pocetna
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	
  
	<div class="fixed-bottom"><progress value="0" max="100"></progress></div>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					  
						<!-- BOXES -->

				
						<div id="update">
						  <div class="logs"> <input class="log current-time-log"> <input class="log progress-log"> </div>
						  <div class="large square el"></div>
						</div>

					  <div id="boxes">
						    <div id="btns">
						      <button class="play"><i class="fa fa-play-circle"></i></button>
						      <button class="pause"><i class="fa fa-pause-circle"></i></button>
						    </div>
						    <div class="box red"></div>
						    <div class="box blue"></div>
						    <div class="box green"></div>
						    <div class="box yellow"></div>
						  </div>
						  
						  <div id="animiraj">sdfsdfsf</div>

						<svg class="shape" width="128" height="128" viewBox="0 0 128 128">
						  <polygon points="64 68.64 8.574 100 63.446 67.68 64 4 64.554 67.68 119.426 100"></polygon>
						</svg>

										
					<h2>sdfsdf</h2>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
