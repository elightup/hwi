<?php // @codingStandardsIgnoreLine
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="news-posts__item">
		<div class="news-posts__image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<div class="news-posts__content">
			<p class="date"><?= get_the_date( 'd/m/Y' )?></p>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
