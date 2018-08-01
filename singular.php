<?php 

get_header();

if( is_page( 'portfolio') ) {

  get_template_part('template-parts/page', 'portfolio');
} elseif ( is_page( 'blog') ) {

  get_template_part( 'template-parts/page', 'blog' );
} elseif ( is_single() ) {
  
  get_template_part( 'template-parts/content', 'single' );
}

wp_footer();
