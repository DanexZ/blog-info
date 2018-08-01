<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head();
	
	global $redux;

	echo '<style>'.$redux['editor-ace2'].'</style>';
	
	?>
</head>

<body <?php body_class(); ?>>

<?php if( is_home() ) { ?>

<header id="mainHeader" class="header relative">
    <div id="tallest" class="section-header">
        <h1>Daniel Zawadzki</h1>
        <p>Info - Blog</p>
    </div>
    <video autoplay loop>
				<source src="./images/Travaho/Travaho.mp4" type="video/mp4" />
				<img src="./images/Travaho/Travaho.jpg" alt="">
    </video>
</header>

<nav id="mainMenu" class="main-menu">
  <div class="container">
		<?php
		$defaults = array( 
			'menu' => 'menu-1',
			'container' => false, 
			'container_id' => '',
			'menu_class' => 'row menu-links', 
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '', 'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
			'item_spacing' => 'preserve',
			'depth' => 0, 'walker' => '',
			'theme_location' => 'menu-1' );

			wp_nav_menu( $defaults );
		?>
	</div>
</nav>

<?php } elseif ( is_singular() ) { ?>

<header class="header single-header">
  <nav>
      <div class="container">

	  <?php

	$defaults = array( 
			'menu' => 'menu-2',
			'container' => false, 
			'container_id' => '',
			'menu_class' => 'row menu-links', 
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '', 'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
			'item_spacing' => 'preserve',
			'depth' => 0, 'walker' => '',
			'theme_location' => 'menu-2' );

			wp_nav_menu( $defaults );

	?>
      </div>
  </nav>
</header>

<?php } ?>
