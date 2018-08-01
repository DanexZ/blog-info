<?php

get_header();

$args = array(
		'orderby' => 'date',
		'order' => 'ASC',
		'posts_per_page' => 12
);

$the_query = new WP_Query($args);

if ( $the_query->have_posts()) : 

?>

<section id="blog" class="section-blog">
				<header class="section-header appear">
						<h3 class="animation">Blog</h3>
				</header>
		<div class="container">

				<?php while ( $the_query->have_posts()) : $the_query->the_post(); ?>

				<section class="blog-item animation">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
						<div class="blog-img">
						
						<?php

								if ( has_post_thumbnail() ) {

								

										the_post_thumbnail();
								}
								
						?>
								<span><?php the_title(); ?></span>
						</div>
						</a>
						<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
				</section> 

				<?php endwhile; ?>
		</div>
</section>

<?php endif;

wp_footer(); ?>