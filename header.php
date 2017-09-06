<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="main-wrapper">
		<header id="pageTop" class="header-wrapper">
			<div class="container-fluid color-bar clearfix">
				<div class="row">
					<div class="col-xs-12"></div>
				</div>
			</div>
			<nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Menüyü görüntüle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="color-1  active ">
								<a href="index-2.html"> <span>Home</span> </a>
							</li>
							<li class=" dropdown megaDropMenu color-2 ">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">
									<span>Classes</span>
								</a>
								<ul class="row dropdown-menu ">
									<li class="col-sm-3 col-xs-12">
										<ul class="list-unstyled">
											<li>Class Grid</li>
											<li class=""><a href="classes-grid.html">Class Grid Fullwidth</a></li>
											<li class=""><a href="classes-grid-left-sidebar.html">Class Grid Left Sidebar</a></li>
											<li class=""><a href="classes-grid-right-sidebar.html">Class Grid Right Sidebar</a></li>
										</ul>
									</li>
									<li class="col-sm-3 col-xs-12">
										<ul class="list-unstyled">
											<li>Class List</li>
											<li class=""><a href="classes-list.html">Class List Fullwidth</a></li>
											<li class=""><a href="classes-list-left-sidebar.html">Class List left Sidebar</a></li>
											<li class=""><a href="classes-list-right-sidebar.html">Class List Right Sidebar</a></li>
										</ul>
									</li>
									<li class="col-sm-3 col-xs-12">
										<ul class="list-unstyled">
											<li>Single Course</li>
											<li class=""><a href="classes-single.html">Single Class </a></li>
											<li class=""><a href="classes-single-left-sidebar.html">Single Class left Sidebar</a></li>
											<li class=""><a href="classes-single-right-sidebar.html">Single Class Right Sidebar</a></li>
										</ul>
									</li>
									<li class="col-sm-3 col-xs-12">
										<ul class="list-unstyled">
											<li>Checkout</li>
											<li><a href="store-checkout.html">Checkout Info</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown singleDrop color-3 ">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>pages</span></a>
								<ul class="dropdown-menu dropdown-menu-left">
									<li class=""><a href="pages-about-us.html">About</a></li>
									<li class="dropdown dropdown-submenu ">
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Team<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li class=""><a href="pages-teachers.html">Teachers</a></li>
											<li class=""><a href="pages-teacher-details.html">Teacher Details</a></li>
										</ul>
									</li>
									<li class=""><a href="pages-photo-gallery.html">Photo Gallery</a></li>
									<li class=""><a href="pages-services.html">Services</a></li>
									<li class=""><a href="pages-service-details.html">Services Details</a></li>
									<li class=""><a href="pages-contact-us.html">Contact Us</a></li>
									<li class=""><a href="pages-faq.html">FAQ</a></li>
									<li class=""><a href="pages-sign-up-or-login.html">Sign Up / Login</a></li>
									<li class=""><a href="pages-error-page.html">Error 404</a></li>
									<li class=""><a href="pages-coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li class="dropdown singleDrop color-4 ">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Blog</span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li class="dropdown dropdown-submenu ">
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li class=""><a href="blog-grid.html">Blog Grid Fullwidth</a></li>
											<li class=""><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
											<li class=""><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
										</ul>
									</li>
									<li class="dropdown dropdown-submenu ">
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li class=""><a href="blog-list.html">Blog List Fullwidth</a></li>
											<li class=""><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
											<li class=""><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
										</ul>
									</li>
									<li class="dropdown dropdown-submenu ">
										<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li class=""><a href="blog-single.html">Single Blog Fullwidth</a></li>
											<li class=""><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a></li>
											<li class=""><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown singleDrop color-5 ">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Store</span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li class="dropdown dropdown-submenu ">
										<a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown">Products<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li class=""><a href="store.html">Products Fullwidth</a></li>
											<li class=""><a href="store-product-left-sidebar.html">Products Left Sidebar</a></li>
											<li class=""><a href="store-product-right-sidebar.html">Products Right Sidebar</a></li>
										</ul>
									</li>
									<li class=""><a href="store-product-single.html">Single Product</a></li>
									<li class=""><a href="store-cart.html">Cart</a></li>
									<li class=""><a href="store-checkout.html">Checkout</a></li>
								</ul>
							</li>
							<li class="dropdown singleDrop color-6 ">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Events</span></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li class=""><a href="events.html">All Events</a></li>
									<li class=""><a href="events-single-left-sidebar.html">Single Event Left Sidebar</a></li>
									<li class=""><a href="events-single-right-sidebar.html">Single Event Right Sidebar</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>