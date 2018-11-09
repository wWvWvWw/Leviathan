<?php
/**
 * This is for a static home page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      
<!--I'll need to sort out content-page or creat new content template -->
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
