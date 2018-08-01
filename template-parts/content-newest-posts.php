<?php
    $args = array(
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => 3
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
        <a href="https://webbuild.com.pl/blog/blog/" class="btn animation">Więcej postów</a>
    </section>
    <?php endif ?>
        