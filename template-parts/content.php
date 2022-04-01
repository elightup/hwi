<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container single_post">
		<div class="single_post__header">
			<div class="entry-header">
				<?php the_tags( '<ul class="hashtag"><li>', '</li><li>', '</li></ul>' ); ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-date">
					<p class="date"><?= esc_html( get_the_date( 'd/m/Y' ) );?></p>
					<div class="single_post__share">
						<p>Share: </p>
						<ul>
							<li><a class="share" href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_url( get_permalink() ); ?>" target="_blank"><?php Hwi_Icons::render( 'face' ) ?></a></li>
							<li><a class="share" href="https://twitter.com/share?text=&url=<?= urlencode( get_permalink() ); ?>" target="_blank"><?php Hwi_Icons::render( 'twitter' ) ?></a></li>
							<li><a class="share" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= esc_url( get_permalink() );?>" target="_blank"><?php Hwi_Icons::render( 'linkedin' ) ?></a></li>
							<li><a class="share" href="#" target="_blank"><?php Hwi_Icons::render( 'email' ) ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="entry-back">
				<a class="goback" href='javascript:goback()'>< Back</a>
			</div>
		</div>
		<div class="single_post__inner">
			<div class="single_post__content">
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
			</div>
			<div class="single_post__sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php hwi_recent_posts(); ?>
