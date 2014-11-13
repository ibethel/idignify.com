<?php get_header(); ?>

<section id="page">
	<div class="container">
	<div class="row">
		<div class="span8 offset2">
			
		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>	

	</div>
	</div>
</div>
</section><!-- #page -->

<?php get_footer(); ?>
