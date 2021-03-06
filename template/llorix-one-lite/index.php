<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package llorix-one-lite
 */

	//get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div role="main" id="content" class="content-wrap">
	<div class="container">

		<div id="primary" class="content-area col-md-8">
			<?php
			echo '<main ';
			if ( have_posts() ) {
				echo ' itemscope itemtype="http://schema.org/Blog" ';
			}
			echo ' id="main" class="site-main" role="main">';

			if ( have_posts() ) {

				while ( have_posts() ) {
					the_post();
					/**
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				}
				the_posts_navigation();

			} else {
				get_template_part( 'content', 'none' );
			}
			?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>
