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
 <?php if ( is_front_page()) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="wrapper" id="full-width-page-wrapper">
	
 
	<div class="fixed-bottom"><progress value="0" max="100"></progress></div>




	<div class="fluid-conteiner" id="vizija">
		
		<!-- PRVI RED -->
		<div class="row ponude hidden-lg-down no-gutters">
			<div class="col-xl-6 col-sm-12 centar">
				<div data-scroll="toggle(.fromTopIn, .fromTopOut)" class="centriran fade">
					<h2 class="naslov2">Naša vizija</h2>	

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. </p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc lobortis elit at tortor sagittis dictum. </p>

				</div>
				
		
				</div>
			<div class="col-xl-6 col-sm-12 lijevo"><img style="float:right" class="srednja_slika" src="http://via.placeholder.com/1000x500" alt=""></div>	
		</div>

		<!-- DRUGI RED -->

		<div class="row ponude hidden-lg-down no-gutters">	
		<div class="col-xl-6 col-sm-12">

			<img src="http://via.placeholder.com/1000x500" alt="">
		</div>

			<div class="col-xl-6 col-sm-12 centar">
				
					<div data-scroll="toggle(.fromTopIn, .fromTopOut)" class="centriran fade">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin mollis sodales maximus. Duis vitae tortor commodo sapien lacinia pellentesque vitae non quam. Nunc commodo justo nisi, sed ullamcorper ex tincidunt at.  </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  </p>
					<h3 class="naslov2">Korisnička podrška</h3>
						<p>email: zagreb@spincity.hr</p>
						<p>tel: 01/444 0051</p>
					<h3 class="naslov2">Prijava štete</h3>
						<p>tel: 01/444 0051</p>
				</div>
					
			</div>	
			
		</div>

		<!-- TREĆI RED -->
		<div class="row ponude hidden-lg-down no-gutters">
			<div class="col-xl-6 col-sm-12 centar">
				<div  data-scroll="toggle(.fromTopIn, .fromTopOut)" class="centriran ">
					<h2 class="naslov2">Naša vizija</h2>	

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. </p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc lobortis elit at tortor sagittis dictum. </p>

				</div>
				
		
				</div>
			<div class="col-xl-6 col-sm-12 lijevo"><img style="float:right" class="srednja_slika" src="http://via.placeholder.com/1000x500" alt=""></div>	
		</div>


	</div>	

		<!-- BOXES -->

		
						<div id="update">
						  <div class="logs"> <input class="log current-time-log"> <input class="log progress-log"> </div>
						  <div class="large square el"></div>
						</div>
<!--  <div id="boxes">
						    <div id="btns">
						      <button class="play"><i class="fa fa-play-circle"></i></button>
						      <button class="pause"><i class="fa fa-pause-circle"></i></button>
						    </div>
						    <div class="box red"></div>
						    <div class="box blue"></div>
						    <div class="box green"></div>
						    <div class="box yellow"></div>
						  </div>
						  
						  <div id="animiraj">sdfsdfsf</div> -->
					 

						<svg class="shape" width="128" height="128" viewBox="0 0 128 128">
						  <polygon points="64 68.64 8.574 100 63.446 67.68 64 4 64.554 67.68 119.426 100"></polygon>
						</svg>

										
					<h2>sdfsdf</h2>

</div><!-- Wrapper end -->


<?php get_footer(); ?>
