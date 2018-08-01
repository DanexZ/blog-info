<?php

get_header();

		get_template_part( 'template-parts/content', 'section-about' );
		get_template_part( 'template-parts/content', 'feature-boxes' );
		get_template_part( 'template-parts/content', 'offer' );
		get_template_part( 'template-parts/content', 'portfolio' );
		get_template_part( 'template-parts/content', 'newest-posts' );
		get_template_part( 'template-parts/content', 'contact' );

wp_footer(); ?>
