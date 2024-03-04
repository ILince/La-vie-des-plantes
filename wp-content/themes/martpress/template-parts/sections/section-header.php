<?php storepress_header_image();  ?>

<!--======= Martpress: Main Header
========================================-->
<header id="vf-header" class="vf-header">
	<?php do_action('storepress_top_header_data'); ?>
	<div id="navigation-wrapper" class="navigation-wrapper">
		<div class="navigation-middle">
			<div class="main-navigation-area d-none d-lg-block">
				<div class="main-navigation <?php echo esc_attr(storepress_sticky_menu()); ?>">
					<div class="container">
						<div class="row navigation-middle-row">
							<div class="col-lg-3 col-12 my-auto">
								<div class="logo">
									<?php storepress_logo(); ?>
								</div>
							</div>
							<div class="col-lg-9 col-12 my-auto">
								<nav class="navbar-area">
									<div class="main-navbar">
										<?php storepress_primary_menu_nav(); ?>
									</div>
									<div class="main-menu-right">
										<ul class="menu-right-list">
											<?php storepress_header_contact(); ?>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-mobile-nav <?php echo esc_attr(storepress_sticky_menu()); ?>">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-mobile-menu">
							<div class="main-menu-right main-mobile-left">
								<div class="logo">
									<?php storepress_logo(); ?>
								</div>
							</div>
							<div class="menu-collapse-wrap">
								<div class="hamburger-menu">
									<button type="button" class="menu-collapsed" aria-label="<?php esc_attr_e('Menu Collaped','martpress'); ?>">
										<div class="top-bun"></div>
										<div class="meat"></div>
										<div class="bottom-bun"></div>
									</button>
								</div>
							</div>
							<div class="main-mobile-wrapper">
								<div id="mobile-menu-build" class="main-mobile-build">
									<button type="button" class="header-close-menu close-style" aria-label="<?php esc_attr_e('Header Close Menu','martpress'); ?>"></button>
								</div>
							</div>
							<div class="header-above-wrapper">
								<div class="header-above-index">
									<div class="header-above-btn">
										<button type="button" class="header-above-collapse" aria-label="<?php esc_attr_e('Header Above Collapse','martpress'); ?>"><span></span></button>
									</div>
									<div id="header-above-bar" class="header-above-bar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="vf-product-menu" class="vf-product-menu">
		<div class="container">
			<div class="row gx-2 product-menu-row">
				<div class="col-lg-3 col-12 my-auto">
					<?php storepress_hdr_product_categories(); ?>
				</div>
				<div class="col-lg-9 col-12 d-flex align-items-center flex-wrap justify-content-end my-auto">
					<?php
					$martpress_hs_hdr_search		=	get_theme_mod('hs_hdr_search','1');
					if($martpress_hs_hdr_search == '1'):
					?>
						<div class="header-search-form">
							<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<input class="header-search-input search-field" name="s" type="text" placeholder="<?php esc_attr_e( 'Search Products', 'martpress' ); ?>" />
								<input type="hidden" name="post_type" value="product" />
								<button class="header-search-button search-submit" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					<?php endif; ?>
					<div class="main-menu-right">
						<ul class="menu-right-list">
							<?php if(class_exists( 'WooCommerce' )) {
								storepress_header_my_acc();  
								storepress_header_cart(); 
							} ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>