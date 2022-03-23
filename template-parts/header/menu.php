<div class="header-menu">
	<nav id="site-navigation" class="main-navigation nav">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'home-menu',
				'container'      => false,
				'menu_class'     => 'main-menu',
			)
		);
		?>
	</nav>
	<div class="header-menu__languages">
		<?php dynamic_sidebar( 'languages' ) ?>
	</div>
	<button class="menu-toggle header-icon" aria-controls="primary-menu" aria-expanded="false">
		<?php Hwi_Icons::render( 'menu' ) ?>
	</button>
</div>
