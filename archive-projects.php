<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container archive-post">

		<?php if ( have_posts() ) : ?>

			<div class="projects__top">
				<div class="projects__title">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</div>
				<div class="projects__excerpt">
					<p>Projects that we completed</p>
				</div>
			</div>
			<div class="projects__list">
				<div class="list">
					<?php
					while ( have_posts() ) :
						the_post();
						/**
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'archive-projects' );
					endwhile;
					?>
				</div>
			</div>
			<?php
			the_posts_pagination( [
				'mid_size'           => 1,
				'prev_text'          => __( '←', 'hwi' ),
				'next_text'          => __( '→', 'hwi' ),
				'screen_reader_text' => ' ',
			] );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</div>


	</main><!-- #main -->

<?php
get_footer();
