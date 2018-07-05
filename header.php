<!doctype html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="robots" content="index,follow">
		<meta name="googlebot" content="index,follow">

		<title><?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?></title>

		<link rel="icon" type="image/png" sizes="16x16" href="https://fredthewebguy.me/wp-content/themes/moderato/favicon-16.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://fredthewebguy.me/wp-content/themes/moderato/favicon-32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="https://fredthewebguy.me/wp-content/themes/moderato/favicon-48.png">
		<link rel="icon" type="image/png" sizes="96x96" href="https://fredthewebguy.me/wp-content/themes/moderato/favicon-96.png">
		<link rel="icon" type="image/png" sizes="192x192" href="https://fredthewebguy.me/wp-content/themes/moderato/favicon-192.png">

		<?php wp_head(); ?>

	</head>

	<body>

		<!-- begin search bar -->
		<div id="searchBar">
			<span id="closeSearch" tabindex="-1">+</span>
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<i class="icon-search" aria-hidden="true"></i>
				<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Search" required>
				<input type="hidden" name="post_type" value="post">
			</form>
		</div><!--# search bar  -->

		<!-- begin header -->
		<header>

			<!-- begin site logo -->
			<div class="logo">
				<a href="<?php echo get_settings('home'); ?>">
				<img src="https://fredthewebguy.me/wp-content/themes/moderato/images/freddy400x400.jpg" alt="Fred">	
				<span class="site-title">FredTheWebGuy</span>
				</a>
			</div><!-- # site logo -->

			<!-- begin site descrption -->
			<div class="site-description">
				&lt; front end developer + web designer /&gt;
			</div><!-- # site descrption -->

			<i class="icon-menu" id="toggleMenu" tabindex=""></i>

		</header><!-- # header-->

		<!-- begin navigation -->
		<nav role="navigation">
			<span id="closeNav" tabindex="-1">+</span>
			<div>
				<ul>
					<li><a href="/articles">Articles</a></li>
					<li><a href="/category/tutorials">Tutorials</a></li>
					<li><a href="/portfolio">Portfolio</a></li>
					<li><a href="/songbook">Songbook</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="#" id="toggleSearch"><i class="icon-search" aria-hidden="true"></i></a></li>
				</ul>
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
					<label for="s">Search</label>
					<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Search" required>
					<input type="hidden" name="post_type" value="post">
				</form>
			</div>
		</nav><!-- # navigation -->