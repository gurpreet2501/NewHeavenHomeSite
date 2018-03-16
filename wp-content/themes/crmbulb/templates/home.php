<?php /* Template Name: Home */ ?>
<?php get_header();
$args = [

];
$args = array(
    'post_type'=> 'blog',
    'order'    => 'ASC',
   );

$args = array( 'numberposts' => 5, 'post_type'=> 'blog');
$myposts = get_posts( $args );

// foreach( $myposts as $post ) :

//   setup_postdata($post);
// 	$tags = get_the_tags();
// 	echo "<pre>";
// 	print_r($tags);

// endforeach;

?>
		<main id="main" role="main">
			<div class="video-header">
				<video
				class="video-bg"
				src="<?= get_template_directory_uri() ?>/assets/vid-ffa.mp4?dl=0" 
				autoplay="true"
				loop="true"
				preload="auto"
			></video>

			<section class="banner">
				<div class="container">
					<div class="text-hol">
						<!-- <h1><strong>What’s Unique About</strong> <span>Humans Is Their Individuality.</span></h1> -->
						<a href="https://shop.bulbwellness.co"  class="btn btn-green">SHOP NOW</a>
					</div>
				</div>
			</section>

			<div class="overlay"></div>
			</div>


				<section class="hsec-whoweare">
					<div class="container">
						<div class="text-hol">
							<h2><span>Who</span> We Are</h2>
							<p>Bulb is a wellness company dedicated to providing you with the balance you need to inspire your creativity, reflect on your purpose, and envision a better, healthier you. We believe in changing the narrative around cannabis to show that it is a responsible, sustainable, and harmonious part of a balanced, natural life.</p>
							<p>We are Bulb. Join us in building your community.</p>
							<a href="#" class="btn">Explore More</a>
						</div>
					</div>
				</section>
				<section class="hsec-ourproducts">
					<div class="container">
						<div class="title-holder">
							<h2><span>Our</span> Products</h2>
							<p></p>
						</div>
						<div class="three-col">
							<div class="col">
								<div class="img-hol">
									<div class="img-area">
										<img src="<?=get_template_directory_uri()?>/assets/images/icon1.png" alt="icon">
									</div>
								</div>
								<div class="text">
									<h3>The Bulb Wellness Subscription </h3>
									<p>By joining the Bulb community, you gain access to your own personalized wellness kit sent on a schedule YOU want. Inside the box are samples of premium, tested CBD products from artisans across the globe. On top of the curated CBD products, the assortment will come with additional wellness products, like stress balls, aromatherapy candles, essential oils, herbal teas, and more. Our goal is to give you a wellness experience that treats your mind, body, and spirit with the balance they deserve. If you receive samples you love, the full sizes of the sample products will be available on the website for purchase. </p>
								</div>
							</div>
							<div class="col">
								<div class="img-hol">
									<div class="img-area">
										<img src="<?=get_template_directory_uri()?>/assets/images/icon2.png" alt="icon">
									</div>
								</div>
								<div class="text">
									<h3>Personalized CBD Products </h3>
									<p>Our Personalized CBD products are designed to bring out different characteristics of your physical, mental, and emotional well-being, tailoring a wellness experience that’s specific to your individual needs. Our products are curated from the finest natural ingredients and tested in technology sound, accredited facilities. Our goal is to seamlessly blend wellness into your lifestyle and help you reach new levels of personal health, creativity, and energy. </p>
								</div>
							</div>
							<div class="col">
								<div class="img-hol">
									<div class="img-area">
										<img src="<?=get_template_directory_uri()?>/assets/images/icon3.png" alt="icon">
									</div>
								</div>
								<div class="text">
									<h3>Bulb Community Platform </h3>
									<p>BulbWellness.co is the leading east-coast digital platform destination for health and wellness oriented cannabis consumers. We provide a complete wellness solution, beginning with an evaluation of your specific needs with an immediate recommendation of wellness options. The Bulb platform allows consumers to purchase products that are curated with love, tap into original and relevant content related to cannabis wellness, educational videos on the benefits of CBD/CBN products and much more! If it’s not wellness you seek, we have premium smoke products, Bulb swag, handcrafted tea cups, CBD products with an evolving premium inventory expansion.</p>
									<p>We pride ourselves on our stellar customer service, discretion and your privacy. As such, we’ve created a “stealth mode” option for all Bulb account holders. This means you can operate and manage your account, but we do not record or store all of your data. Read more about it in our <a href="#">Privacy Policy!</a></p>
								</div>
							</div>
						</div>
						<a href="#" class="btn">Explore More</a>
					</div>
				</section>
				<section class="usersaying">
					<div class="overlaygreen">
						<div class="container">
							<div class="carousel gallery-js-ready autorotation-active">
								<div class="mask" style="height: 378px;">
									<div class="slideset" style="width: 4680px; margin-left: -2340px;">
										<div class="slide" style="width: 1170px;">
											<div class="slide-holder">
												<h2>What Our Users Are Saying</h2>
												<blockquote>
													<q>“After months of trying and the 10 different pacifiers I tried this is the only one my baby started taking at 5 months old! He loves it and it has made sleep/nap times so much more easier! piece!”</q>
													<cite>Wajahat ali</cite>
												</blockquote>
											</div>
										</div>
										<div class="slide" style="width: 1170px;">
											<div class="slide-holder">
												<h2>What Our Users Are Saying</h2>
												<blockquote>
													<q>“After months of trying and the 10 different pacifiers I tried this is the only one my baby started taking at 5 months old! He loves it and it has made sleep/nap times so much more easier! piece!”</q>
													<cite>Wajahat ali</cite>
												</blockquote>
											</div>
										</div>
										<div class="slide active" style="width: 1170px;">
											<div class="slide-holder">
												<h2>What Our Users Are Saying</h2>
												<blockquote>
													<q>“After months of trying and the 10 different pacifiers I tried this is the only one my baby started taking at 5 months old! He loves it and it has made sleep/nap times so much more easier! piece!”</q>
													<cite>Wajahat ali</cite>
												</blockquote>
											</div>
										</div>
										<div class="slide" style="width: 1170px;">
											<div class="slide-holder">
												<h2>What Our Users Are Saying</h2>
												<blockquote>
													<q>“After months of trying and the 10 different pacifiers I tried this is the only one my baby started taking at 5 months old! He loves it and it has made sleep/nap times so much more easier! piece!”</q>
													<cite>Wajahat ali</cite>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
								<div class="btn-holder">
									<a href="#" class="btn-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a href="#" class="btn-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
								<div class="pagination"><ul><li class=""><a href="#">1</a></li><li class=""><a href="#">2</a></li><li class="active"><a href="#">3</a></li><li class=""><a href="#">4</a></li></ul></div>
							</div>
						</div>
					</div>
				</section>
				<section class="hsect-faq">
					<div class="container">
						<h2><span>FAQ’s</span></h2>
						<ul class="accordion">
							<li>
								<a href="#" class="accordion-opener"><span>	What is Wellness and CBD?</span><i class="fa fa-plus" aria-hidden="true"></i></a>
								<div class="accordion-slide" style="position: absolute; top: -9999px; left: -9999px; width: 1126px;">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. Morbi tincidunt ornare massa eget egestas. Arcu bibendum at varius vel pharetra vel turpis. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Orci sagittis  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. Morbi tincidunt ornare massa eget egestas. <a href="#">Click Here</a></p>
								</div>
							</li>
							<li class="active">
								<a href="#" class="accordion-opener"><span>What kinds of product comes w/ a personalized wellness subscription?</span> <i class="fa fa-plus" aria-hidden="true"></i></a>
								<div class="accordion-slide">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. Morbi tincidunt ornare massa eget egestas. Arcu bibendum at varius vel pharetra vel turpis. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Orci sagittis  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. Morbi tincidunt ornare massa eget egestas. <a href="#">Click Here</a></p>
								</div>
							</li>
							<li>
								<a href="#" class="accordion-opener"><span>How should I use CBD products?</span> <i class="fa fa-plus" aria-hidden="true"></i></a>
								<div class="accordion-slide" style="position: absolute; top: -9999px; left: -9999px; width: 1126px;">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. Morbi tincidunt ornare massa eget egestas. Arcu bibendum at varius vel pharetra vel turpis. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Orci sagittis  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. Morbi tincidunt ornare massa eget egestas. <a href="#">Click Here</a></p>
								</div>
							</li>
							<li>
								<a href="#" class="accordion-opener"><span>What does CBD help with?</span> <i class="fa fa-plus" aria-hidden="true"></i></a>
								<div class="accordion-slide" style="position: absolute; top: -9999px; left: -9999px; width: 1126px;">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. . <a href="#">Click Here</a></p>
								</div>
							</li>
							<li>
								<a href="#" class="accordion-opener"><span>What are payment options?</span> <i class="fa fa-plus" aria-hidden="true"></i></a>
								<div class="accordion-slide" style="position: absolute; top: -9999px; left: -9999px; width: 1126px;">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. . <a href="#">Click Here</a></p>
								</div>
							</li>
							<li>
								<a href="#" class="accordion-opener"><span>What stealth?</span> <i class="fa fa-plus" aria-hidden="true"></i></a>
								<div class="accordion-slide" style="position: absolute; top: -9999px; left: -9999px; width: 1126px;">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla. . <a href="#">Click Here</a></p>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<section class="hsect-bulblife">
					<div class="container">
						<h2><span>Bulb</span> Life</h2>
						<div class="three-col">
						  <?php foreach ($myposts as $key => $post):

						  				 setup_postdata($post);

						  				 $customTags = [];
						  				 $tags = (array)get_the_tags();
						  				 foreach ($tags as $key => $tag) {
						  				 	$customTags[] =	$tag->name;
						  				 }

											if($post->post_status!='publish')

											continue;
										?>
									<div class="col">
										<div class="img-hol">
											 <img src="<?=the_post_thumbnail_url('full')?>" alt="image" />
											</div>
										<div class="text">
											<h3><a href="<?=get_post_permalink()?>"><?=$post->post_title?></a></h3>
											<ul>
												<li><?=date('M d, Y', strtotime($post->post_date))?></li>
												<li><?=implode(',',$customTags)?></li>
											</ul>
											<p><?=$post->post_content?></p>
											<a href="<?=get_post_permalink()?>" class="btn btn-readmore">Read More</a>
										</div>
									</div>
						  <?php endforeach ?>

						</div>
						<a href="#" class="btn">Explore More</a>
					</div>
				</section>
				<section class="sect-joinournews">
					<div class="container">
						<h2>Join Our Newsletter</h2>
						<form action="#" class="joinourlogin">
							<input type="email" placeholder="Enter your email address">
							<button type="submit">join</button>
						</form>
					</div>
				</section>
			</main>
<?php get_footer(); ?>
