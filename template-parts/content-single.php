<section class="wide-nav animPage">
    <h3><?php the_title(); ?></h3>
</section>

<div class="container-post single-page animPage">
	
		<div class="west">
		
			<main>

			<?php while ( have_posts()) : the_post(); ?>
			
				<article>
				
					<header>
					
						<h1><?php the_title(); ?></h1>
						<p><?php the_date(); ?></p>
					
					</header>
										
					<?php the_content(); ?>
					
					<section>
					
						<header>
						
							<h1>Komentarze czytelników</h1>
							
							<p>Przemyślenia? Reakcje? Zachęcam do dyskusji w komentarzach poniżej, jednocześnie prosząc o zachowanie netykiety oraz kultury wypowiedzi.</p>
						
						</header>

<?php
						
if ( comments_open() ) {
	comments_template();
}

?>

					</section>
				
				</article>
			
		<?php endwhile ?>

			</main>
		
		</div>

		<?php get_sidebar() ?>
		
	</div>
