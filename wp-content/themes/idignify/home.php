<?php get_header(); ?>
	<div class="article-wrapper" id="home">
		<div class="container">
			<article id="home">
				<h1 class="tagline"><span class="smaller">Let's</span> free <span class="smaller">someone</span> <br \><span class="shift"> together.</span></h1>
				<div class="row featured">
					<div class="span2 offset4"><img src="<?php bloginfo('template_directory'); ?>/images/speech-bubble.png" width="45" height="37" alt="Speech Bubble"><a class="btn" href="#">Latest News</a></div>
					<div class="span2"><img src="<?php bloginfo('template_directory'); ?>/images/bird-cage.png" width="50" height="52" alt="Bird Cage"><a class="btn" href="#">Get Involved</a></div>
				</div>
			</article>		
			<footer>
				<div class="container">
					<p>Let's <strong>Free</strong> Someone Together
						<span>
							<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/posterous.png" width="23" height="23" alt="Posterous"></a>
							<a href="http://www.facebook.com/idignify"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" width="8" height="16" alt="Facebook"></a>
							<a href="http://twitter.com/#!/iDignify"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="9" height="12" alt="Twitter"></a>
						</span>
					</p>
				</div>
			</footer> 
	    </div> <!-- /container -->
		 
	</div>
	
	<?php query_posts('post_type=sections'); ?>
	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
	
	<div class="article-wrapper" id="<?php the_field('section_id') ?>">
		<div class="container">
			<article id="<?php the_field('section_id') ?>">
				<h1><?php the_title(); ?></h1>
		      	<p><?php the_content(); ?></p>
			</article>		
	    </div> <!-- /container -->
	</div><!-- .article-wrapper-->
	
	<?php endwhile; ?>
	
		<?php // Navigation ?>
	
	<?php else : ?>
	
		<?php // No Posts Found ?>
	
<?php endif; ?>
	

<?php get_footer(); ?>
