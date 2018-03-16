<header id="header">
	<div class="container">
		<div class="header-holder">
			<div class="logo">
				<a href="/"><img src="<?=get_template_directory_uri().'/assets/images/logo.png'?>" alt="logo"></a>
			</div>

			<div class="actions">
			<nav id="nav" class="open-close">
					<a href="#" class="opener"><span></span></a>
					<div class="drop">
						<div class="slide">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							));
						?>
						</div>
						<div class="slide">
							<div class="menu-menu-1-container">
									<ul id="primary-menu" class="menu">
											<li id="menu-item-40" class="menu-item">
												<a href="<?= BULB_SHOP_MENU_URL ?>">Shop</a>
										</li>
									</ul>
						</div>
						</div>

            <ul class="login-sign">
            <?php if (isset($_COOKIE['token']) && !empty($_COOKIE['token'])): ?>
              <li><a href="https://shop.bulbwellness.co/logout">Logout</a></li>
            <?php else: ?>
              <li><a href="https://shop.bulbwellness.co/login">Login</a></li><li><a href="https://shop.bulbwellness.co/signup">Signup</a></li>
            <?php endif; ?>
              </ul>
						
					</div>
				</nav>
		
			</div>
		</div>
	</div>
</header>