<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HWI
 */

get_header();

$postID    = get_the_ID(); // @codingStandardsIgnoreLine
$categoris = get_the_terms( $postID, 'category' ); // @codingStandardsIgnoreLine
if ( $categoris !== false ) {
	foreach ( $categoris as $category ) {
		$categoris_id = $category->term_id;
	}
}
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			if ( $categoris_id === 23 ) {
				get_template_part( 'template-parts/content', 'recruitment' );
			} else {
				get_template_part( 'template-parts/content', get_post_type() );
			}

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
