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
	
 
<!--<div class="fixed-bottom"><progress value="0" max="100"></progress></div>  -->	




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

			<!-- sdfdfsdfsdfsd -->
			<div class="container">
				<?php 

					$posts = get_posts(array(
						'posts_per_page'	=> 6,
						'post_type'			=> 'post'
					));

					if( $posts ): ?>
						
						<div class="single-item">
							
						<?php foreach( $posts as $post ): 
							
							setup_postdata( $post );
							
							?>
								
				
							<div>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<h2 class="naslov"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<!-- <?php the_excerpt(); ?> -->						
							</div>
							
						
						<?php endforeach; ?>
						
					</div>
						
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>
			</div>




	</div>	


		<!-- BOXES -->

		<div class="fixed-bottom"><?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 536.9 570" width="150" height="250" style="enable-background:new 0 0 536.9 570;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#C41C23;}
	.st1{fill:#DADADA;}
	.st2{fill:#FCEC3D;}
	.st3{fill:#EFB319;}
	.st4{fill:#F7D333;}
	.st5{fill:url(#SVGID_1_);}
</style>
<g>
	<path class="st0" d="M54.7,241.5l-1-7.7C53.9,236.4,54.2,238.9,54.7,241.5z"/>
	<path class="st1" d="M53.7,233.8c0.2,2.6,0.5,5.1,1,7.7L53.7,233.8L53.7,233.8z"/>
</g>
<g >
	<path class="st0" d="M245,284.8c-46.6,0-91.4-6.2-126-17.5c-31.3-10.2-52.2-23.9-57.8-37.8c0-0.3,0-0.6,0-0.9
		c0-29.7,18.6-57.9,52.5-79.5c35.1-22.4,81.9-34.7,131.9-34.7c49.9,0,96.8,12.3,131.9,34.7c33.3,21.3,51.9,49,52.5,78.2l-0.4-0.1
		C421.9,255,349.2,284.8,245,284.8z"/>
	<path class="st1" d="M245.6,122.9c24.6,0,48.5,3.1,70.9,9.1c21.4,5.8,40.5,14,56.9,24.4c29.9,19.1,47.1,43.4,48.6,68.7
		c-2.4,8.5-17.4,22.4-51.8,33.8c-34.1,11.4-78.6,17.6-125.2,17.6c-45.9,0-89.8-6.1-123.7-17.1c-32-10.4-47.7-22.8-52.2-31.7
		c0.4-26.3,17.7-51.5,48.7-71.3c16.3-10.4,35.5-18.6,56.9-24.4C197,125.9,220.9,122.9,245.6,122.9 M245.6,106.2
		c-106.1,0-192.2,54.9-192.2,122.5c0,0.8,0,1.7,0,2.5c11.8,34.9,93,62,191.6,62c100,0,182.3-27.9,192.1-63.6l-2.8,22.5
		c2.3-7.6,3.5-15.4,3.5-23.4C437.8,161,351.7,106.2,245.6,106.2L245.6,106.2z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="122.1,53 133.7,40.3 156.7,42.7 149.1,58.2 	"/>
	<path class="st3" d="M156.7,42.7l-7.5,15.5l-24.4,247.3c6.2,1.3,12.6,2.5,19.2,3.6L156.7,42.7z"/>
	<path class="st3" d="M139.7,396.9l4.2-87.8c-6.6-1.1-13-2.3-19.2-3.6l-9.8,99.2L139.7,396.9z"/>
	<path class="st4" d="M149.1,58.2L122.1,53l-17.7,247.6c6.5,1.7,13.3,3.3,20.4,4.8L149.1,58.2z"/>
	<path class="st4" d="M114.9,404.7l9.8-99.2c-7.1-1.5-13.9-3.1-20.4-4.8l-6.8,95.5L114.9,404.7z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="271.7,59.4 283.3,46.7 306.3,49.1 298.8,64.6 	"/>
	<path class="st3" d="M306.3,49.1l-7.5,15.5L274,315.8c6.6-0.3,13.2-0.8,19.6-1.3L306.3,49.1z"/>
	<path class="st3" d="M289.3,403.2l4.3-88.8c-6.4,0.5-13,1-19.6,1.3l-9.4,95.3L289.3,403.2z"/>
	<path class="st4" d="M298.8,64.6l-27.1-5.2l-18.4,257.1c7-0.1,13.9-0.4,20.7-0.7L298.8,64.6z"/>
	<path class="st4" d="M264.6,411l9.4-95.3c-6.8,0.4-13.7,0.6-20.7,0.7l-6.2,86.1L264.6,411z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="76.5,68.1 100.3,71.5 113.2,66.7 94.6,61.9 	"/>
	<path class="st3" d="M113.2,66.7l-12.9,4.8l-2,227.5c4.7,1.4,9.6,2.6,14.7,3.8L113.2,66.7z"/>
	<path class="st3" d="M112.9,393.8l0.1-91c-5-1.2-10-2.5-14.7-3.8l-0.9,100.9L112.9,393.8z"/>
	<path class="st4" d="M100.3,71.5l-23.8-3.4l3.4,225c5.8,2.1,11.9,4,18.3,5.8L100.3,71.5z"/>
	<path class="st4" d="M97.4,399.1L98.3,299c-6.4-1.8-12.5-3.8-18.3-5.8l1.5,97.6L97.4,399.1z"/>
</g>
<g id="pet">
	<polygon class="st2" points="311.4,63.7 334.7,69.7 348,66.3 330.1,59.5 	"/>
	<path class="st3" d="M348,66.3l-13.3,3.4l-29,243.6c5.1-0.5,10.2-1.1,15.1-1.8L348,66.3z"/>
	<path class="st3" d="M311.9,391.4l8.9-79.9c-5,0.7-10,1.3-15.1,1.8l-9.8,82.5L311.9,391.4z"/>
	<path class="st4" d="M334.7,69.7l-23.3-6l-23.8,251.2c6.1-0.5,12.1-1,18-1.6L334.7,69.7z"/>
	<path class="st4" d="M295.9,395l9.7-81.7c-5.9,0.6-11.9,1.2-18,1.6l-6.6,70L295.9,395z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="184.4,54.8 208,59.1 221.1,54.8 202.7,49.3 	"/>
	<path class="st3" d="M221.1,54.8L208,59.1l-12.3,256c4.9,0.3,9.9,0.6,14.9,0.9L221.1,54.8z"/>
	<path class="st3" d="M208,381.6l2.6-65.7c-5-0.2-10-0.5-14.9-0.9l-3.4,72L208,381.6z"/>
	<path class="st4" d="M208,59.1l-23.6-4.3l-6.2,258.8c5.7,0.6,11.6,1.1,17.5,1.5L208,59.1z"/>
	<path class="st4" d="M192.3,386.3l3.4-71.3c-5.9-0.4-11.8-0.9-17.5-1.5l-1.5,63.7L192.3,386.3z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="34.9,129.9 49.1,139.4 70.5,129 54.3,120.4 	"/>
	<path class="st3" d="M70.5,129l-21.3,10.4l40.8,118.6c7.6,4,16.3,7.8,26,11.2L70.5,129z"/>
	<path class="st3" d="M169.5,434.9l-53.6-165.8c-9.6-3.5-18.3-7.2-26-11.2l65.5,190.6L169.5,434.9z"/>
	<path class="st4" d="M49.1,139.4l-14.2-9.5l36.8,116.4c5.1,4.1,11.2,8,18.2,11.6L49.1,139.4z"/>
	<path class="st4" d="M155.4,448.5L89.9,257.9c-7-3.7-13.1-7.6-18.2-11.6l63.8,202L155.4,448.5z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="223.7,41.1 247.5,49.7 259.7,41.1 241.7,33.2 	"/>
	<path class="st3" d="M259.7,41.1l-12.2,8.6l6.2,266.8c5.1-0.1,10.1-0.3,15.1-0.5L259.7,41.1z"/>
	<path class="st3" d="M270.4,366.8l-1.7-50.8c-5,0.2-10,0.4-15.1,0.5l1.3,56.1L270.4,366.8z"/>
	<path class="st4" d="M253.6,316.5l-6.2-266.8l-23.7-8.6l11.1,275.5c1.9,0,3.9,0,5.8,0C245,316.6,249.3,316.6,253.6,316.5z"/>
	<path class="st4" d="M254.9,372.6l-1.3-56.1c-4.3,0.1-8.6,0.1-13,0.1c-2,0-3.9,0-5.8,0l1.9,46.6L254.9,372.6z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="413.7,139.6 434.2,154.5 448.3,149.5 433.2,137 	"/>
	<path class="st3" d="M448.3,149.5l-14.1,4.9l-32.7,125.1c6.7-3.8,12.4-7.8,17.2-12L448.3,149.5z"/>
	<path class="st3" d="M368.9,465.6l49.7-198c-4.7,4.2-10.5,8.2-17.2,12l-49,187.3L368.9,465.6z"/>
	<path class="st4" d="M434.2,154.5l-20.5-14.8l-36.8,151.3c9.2-3.5,17.4-7.3,24.6-11.4L434.2,154.5z"/>
	<path class="st4" d="M352.5,466.9l49-187.3c-7.2,4.1-15.4,7.9-24.6,11.4l-39.4,161.9L352.5,466.9z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="151.5,72.7 175.3,81.3 187.5,72.7 169.5,64.8 	"/>
	<path class="st3" d="M187.5,72.7l-12.2,8.6l5.4,232.5c4.9,0.5,9.8,0.9,14.8,1.2L187.5,72.7z"/>
	<path class="st3" d="M198.2,398.4l-2.7-83.3c-5-0.4-9.9-0.8-14.8-1.2l2.1,90.3L198.2,398.4z"/>
	<path class="st4" d="M175.3,81.3l-23.7-8.6l9.6,238.9c6.4,0.8,12.9,1.6,19.5,2.2L175.3,81.3z"/>
	<path class="st4" d="M182.7,404.1l-2.1-90.3c-6.6-0.6-13.1-1.4-19.5-2.2l3.3,83.2L182.7,404.1z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="154.1,157 165.7,144.3 188.7,146.7 181.1,162.2 	"/>
	<path class="st3" d="M188.7,146.7l-7.5,15.5l-14.8,150.1c4.7,0.6,9.5,1.1,14.3,1.6L188.7,146.7z"/>
	<path class="st3" d="M171.7,500.8l9-187c-4.8-0.5-9.6-1-14.3-1.6l-19.4,196.4L171.7,500.8z"/>
	<path class="st4" d="M181.1,162.2l-27.1-5.2l-10.9,151.9c7.5,1.3,15.2,2.4,23.2,3.3L181.1,162.2z"/>
	<path class="st4" d="M146.9,508.6l19.4-196.4c-7.9-1-15.7-2.1-23.2-3.3l-13.7,191.2L146.9,508.6z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="370.4,65.8 382.1,53 405.1,55.4 397.5,71 	"/>
	<path class="st3" d="M405.1,55.4L397.5,71l-22.8,231.2c6.5-1.6,12.8-3.4,18.8-5.2L405.1,55.4z"/>
	<path class="st3" d="M388.1,409.6l5.4-112.7c-6,1.8-12.2,3.6-18.8,5.2l-11.4,115.3L388.1,409.6z"/>
	<path class="st4" d="M397.5,71l-27.1-5.2l-17.3,241.1c7.5-1.4,14.6-3,21.5-4.7L397.5,71z"/>
	<path class="st4" d="M363.3,417.4l11.4-115.3c-6.9,1.7-14.1,3.3-21.5,4.7l-7.3,102.1L363.3,417.4z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="210.1,105.3 233.7,109.6 246.8,105.3 228.5,99.7 	"/>
	<path class="st3" d="M246.8,105.3l-13.1,4.3l-9.9,206.8c4.8,0.1,9.6,0.2,14.5,0.2L246.8,105.3z"/>
	<path class="st3" d="M233.7,432.1l4.6-115.5c-4.9,0-9.7-0.1-14.5-0.2L218,437.6L233.7,432.1z"/>
	<path class="st4" d="M233.7,109.6l-23.6-4.3l-5,210.4c6.2,0.3,12.4,0.6,18.7,0.8L233.7,109.6z"/>
	<path class="st4" d="M218,436.8l5.8-120.4c-6.3-0.2-12.5-0.4-18.7-0.8l-2.7,112.2L218,436.8z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="184.3,213.7 196.1,226.1 219.2,220.6 205.3,208.8 	"/>
	<path class="st3" d="M219.2,220.6l-23.1,5.5l10,89.6c7.2,0.4,14.6,0.7,22,0.8L219.2,220.6z"/>
	<path class="st3" d="M245.6,474.7l-17.5-158.2c-7.5-0.1-14.8-0.4-22-0.8l22.9,169.2L245.6,474.7z"/>
	<path class="st4" d="M196.1,226.1l-11.8-12.4l8.7,101.1c4.3,0.3,8.7,0.6,13.1,0.8L196.1,226.1z"/>
	<path class="st4" d="M228.9,484.8L206,315.7c-4.4-0.2-8.8-0.5-13.1-0.8l16.6,165.4L228.9,484.8z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="100.4,170.4 112,183 135.2,178 121.5,165.9 	"/>
	<path class="st3" d="M135.2,178l-23.2,5l11.1,122.1c7,1.5,14.2,2.8,21.6,4.1L135.2,178z"/>
	<path class="st3" d="M158.5,498.8l-13.8-189.6c-7.5-1.2-14.7-2.6-21.6-4.1l18.5,203.5L158.5,498.8z"/>
	<path class="st4" d="M112,183l-11.5-12.6l8.6,131.4c4.5,1.1,9.2,2.2,14,3.2L112,183z"/>
	<path class="st4" d="M141.6,508.6l-18.5-203.5c-4.8-1-9.5-2.1-14-3.2l13.3,201.8L141.6,508.6z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="352.8,87 373.3,101.7 387.4,96.7 372.2,84.2 	"/>
	<path class="st3" d="M387.4,96.7l-14.1,5l-53.7,210c5.3-0.7,10.5-1.4,15.6-2.3L387.4,96.7z"/>
	<path class="st3" d="M309.7,413.2l25.5-103.8c-5.1,0.8-10.3,1.6-15.6,2.3l-26.3,102.9L309.7,413.2z"/>
	<path class="st4" d="M373.3,101.7L352.8,87l-54,227c7.1-0.7,14-1.4,20.8-2.3L373.3,101.7z"/>
	<path class="st4" d="M293.2,414.5l26.3-102.9c-6.8,0.9-13.7,1.7-20.8,2.3l-20.6,86.6L293.2,414.5z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="341.6,182.8 365.2,187.1 378.3,182.8 359.9,177.2 	"/>
	<path class="st3" d="M378.3,182.8l-13.1,4.3l-5.6,117.8c4.8-1,9.4-2.1,13.9-3.3L378.3,182.8z"/>
	<path class="st3" d="M365.2,509.6l8.3-208.1c-4.5,1.2-9.2,2.2-13.9,3.3l-10.1,210.3L365.2,509.6z"/>
	<path class="st4" d="M365.2,187.1l-23.6-4.3l-3,126.1c7.2-1.2,14.2-2.6,21-4L365.2,187.1z"/>
	<path class="st4" d="M349.5,514.3l10.1-209.5c-6.8,1.5-13.8,2.8-21,4l-4.7,196.4L349.5,514.3z"/>
</g>
<g class="krumpirici">
	<polygon class="st2" points="250.2,153.3 259,138.4 282,136.1 277.8,152.9 	"/>
	<path class="st3" d="M282,136.1l-4.3,16.7l17,161.5c5.1-0.4,10-0.9,14.9-1.5L282,136.1z"/>
	<path class="st3" d="M337,486.4l-27.2-173.6c-4.9,0.6-9.9,1-14.9,1.5l19.5,184.7L337,486.4z"/>
	<path class="st4" d="M277.8,152.9l-27.6,0.4l21.6,162.6c7.8-0.4,15.5-0.9,23-1.5L277.8,152.9z"/>
	<path class="st4" d="M314.3,499.1l-19.5-184.7c-7.5,0.6-15.2,1.2-23,1.5l23.7,178.4L314.3,499.1z"/>
</g>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="53.0239" y1="392.9556" x2="438.1734" y2="392.9556">
	<stop  offset="0" style="stop-color:#97080C"/>
	<stop  offset="3.391297e-002" style="stop-color:#AA0D11"/>
	<stop  offset="8.815533e-002" style="stop-color:#C21218"/>
	<stop  offset="0.1498" style="stop-color:#D5171D"/>
	<stop  offset="0.2223" style="stop-color:#E21A21"/>
	<stop  offset="0.3156" style="stop-color:#EA1B23"/>
	<stop  offset="0.5038" style="stop-color:#EC1C24"/>
	<stop  offset="0.6599" style="stop-color:#E91B23"/>
	<stop  offset="0.7568" style="stop-color:#E11921"/>
	<stop  offset="0.8375" style="stop-color:#D2161D"/>
	<stop  offset="0.9093" style="stop-color:#BE1117"/>
	<stop  offset="0.9747" style="stop-color:#A30B10"/>
	<stop  offset="1" style="stop-color:#97080C"/>
</linearGradient>
<path class="st5" d="M245.6,293.2c-100,0-182.3-27.7-192.5-63.2l37.6,300.1c0,0,60.1,26.2,156.3,26.2c93.8,0,153.6-26.2,153.6-26.2
	l37.6-300.4C428.4,265.3,345.9,293.2,245.6,293.2z"/>
</svg></div>
			



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
