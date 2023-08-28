<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="app/views/asset/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="app/views/asset/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="app/views/asset/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="app/views/asset/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="app/views/asset/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="app/views/asset/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.app/views/asset/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="app/views/asset/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					
				<?php
				$current_page = $_SERVER['REQUEST_URI'];

				$menu_items = array(
					'Home' => '/',
					'Menu' => 'menu',
					'About' => 'about',
					'Post' => array('reservation', 'stuff', 'gallery'),
					'Blog' => 'blog',
					'Contact' => 'contact',
				);

				function isMenuItemActive($menuItem, $current_page) {
					// xu ly slug cua Post
					if (is_array($menuItem)) {
						foreach ($menuItem as $subItem) {
							if ($current_page === '/' . $subItem) {
								return true;
							}
						}
						return false;
					} // Cac slugs khac 
					else {
						if ($menuItem === '/') {
							return $current_page === $menuItem;
						}
						return $current_page === '/' . $menuItem;
					}
				}

				?>

				<ul class="navbar-nav ml-auto">
					<?php foreach ($menu_items as $label => $url) : ?>
						<?php if ($label === 'Post') : ?>
							<li class="nav-item dropdown <?php echo isMenuItemActive($url, $current_page) ? 'active' : ''; ?>">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"><?php echo $label; ?></a>
								<div class="dropdown-menu" aria-labelledby="dropdown-a">
									<a class="dropdown-item" href="reservation">Reservation</a>
									<a class="dropdown-item" href="stuff">Stuff</a>
									<a class="dropdown-item" href="gallery">Gallery</a>
								</div>
							</li>
						<?php else : ?>
							<li class="nav-item <?php echo isMenuItemActive($url, $current_page) ? 'active' : ''; ?>">
								<a class="nav-link" href="<?php echo $url; ?>"><?php echo $label; ?></a>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>

				
				
					<!-- <ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation">Reservation</a>
								<a class="dropdown-item" href="stuff">Stuff</a>
								<a class="dropdown-item" href="gallery">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
						<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
					</ul> -->
				</div>
			</div>
		</nav>
</header>