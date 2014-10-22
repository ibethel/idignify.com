<?php get_header(); ?>

	<div class="article-wrapper" id="home">
		<div class="container">
			<article id="home">
				<h1 class="tagline"><span class="smaller">Let's</span> free <span class="smaller">someone</span> <br \><span class="shift"> together.</span></h1>
				<div class="row featured">
					<div class="span3 offset3">
						<img src="<?php bloginfo('template_directory'); ?>/images/speech-bubble.png" width="45" height="37" alt="Speech Bubble" class="bubble">
						<a class="btn" href="http://idignify.wordpress.com/">Latest News</a>
					</div>
					<div class="span3">
						<img src="<?php bloginfo('template_directory'); ?>/images/bird-cage.png" width="50" height="52" alt="Bird Cage" class="cage">
						<a class="btn involved-btn" href="#involved">Get Involved</a>
					</div>
				</div>
			</article>		
	    </div> <!-- /container -->
	</div><!-- .article-wrapper -->
	
	<?php query_posts('post_type=sections'); ?>
	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
	
	<div class="article-wrapper" id="<?php the_field('section_id') ?>">
		<div class="container">
			<article id="<?php the_field('section_id') ?>">
		      	<p><?php the_content(); ?></p>
			</article>		
	    </div> <!-- /container -->
	</div><!-- .article-wrapper-->
	
	<?php endwhile; else : ?>
		<p>There was a major error!  Please contact us at <a href="mailto:info@idignify.com and let us know?Subject=Website Issue">info@idignify.com</a> and let us know.  Thanks</p>
	<?php endif; ?>
<?php get_footer(); ?>
