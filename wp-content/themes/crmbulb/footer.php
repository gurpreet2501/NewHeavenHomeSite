<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crmbulb
 */

?>

	</div><!-- #content -->

<?php /*	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'crmbulb' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. 
				printf( esc_html__( 'Proudly powered by %s', 'crmbulb' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. 
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'crmbulb' ), 'crmbulb', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
	*/?>
	<footer id="footer">
				<div class="container">
					<div class="colmuns">
						<div class="flogo-hol">
							<div class="flogo"><img src="<?=get_template_directory_uri().'/assets/images/logo.png'?>" alt="logo"></div>
							<p>Lorem Ipsum is simply dummy text of the had a printing and typesetting industry. Ipsum hasbeen the industry's printing and type seting .</p>
						</div>
						<div class="connactus cocol">
							<span class="title">Connect</span>
							<ul class="contactmail">
								<li><a href="tel:+2347030795187">+2347030795187</a></li>
								<li><a href="mailto:happiness@bulbwellness.co">happiness@bulbwellness.co</a></li>
							</ul>
							<ul class="socail-icon">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="collparts cocol">
							<span class="title">Collaboration Partners </span>
							<ul>
								<li><a href="/who-we-are/">Who We Are</a></li>
								<li><a href="#">How It Words</a></li>
								<li><a href="https://shop.bulbwellness.co">Shop</a></li>
								<li><a href="#">Bulb Life</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<span>Copyrights © 2017  <a href="index.html">Bulb</a>, LLC | All rights reserved.</span>
					</div>
				</div>
			</footer>
	   <?php // dynamic_sidebar( 'first-footer-widget-area' ); ?> 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
