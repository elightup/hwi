<?php // @codingStandardsIgnoreLine
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */
$cat_name = get_the_terms( $post->ID, 'category' );
?>
<div class="news-sidebar__item">
	<div class="news-sidebar__image">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="news-sidebar__content">
		<p class="date"><?= esc_html( $cat_name[0]->name )?></p>
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="excerpt"><?php the_excerpt(); ?></div>
	</div>
</div>
