<!doctype html>
<html lang="<?php language_attributes(); ?>" >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >



<ul class="social-bar">
	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt=""></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt=""></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt=""></a></li>
</ul>

<div id="up"><a href="#jump"><img src="<?php echo get_template_directory_uri(); ?>/img/orang.png" alt=""></a></div>



<div class="main_wrap header-bg">
	<div class="wrap">
	<header id="jump">
			<div class="brand">
                <a href="<?php home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
				<p><?php bloginfo('description'); ?></p>
			</div>
			<div class="search-form">
				<?php get_search_form(); ?>
			</div>
	   </header>
	</div>
</div>
