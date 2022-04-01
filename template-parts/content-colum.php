<?php // @codingStandardsIgnoreLine
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */

?>
<div class="news-sidebar__item">
	<div class="news-sidebar__image">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="news-sidebar__content">
		<p class="date"><?= esc_html( get_the_date( 'dS M, Y' ) )?></p>
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
</div>
