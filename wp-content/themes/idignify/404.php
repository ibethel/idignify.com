<?php get_header(); ?>

	<div class="container">
		<h1><?php _e( 'Not Found', 'smm' ); ?></h1>
			<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'smm' ); ?></p>
			<?php get_search_form(); ?>
	</div>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>