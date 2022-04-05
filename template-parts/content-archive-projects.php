<?php // @codingStandardsIgnoreLine
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */
$projects = get_the_terms( $post->ID, 'project-type' );
?>
<div class="projects__item">
	<?php the_post_thumbnail(); ?>
	<div class="projects__content">
		<a href="<?php the_permalink(); ?>">
			<p class="date"><span><?= get_the_date( 'd/m/Y' );?></span></p>
			<div class="projects__content--title">
				<h3><?= esc_html( $projects[0]->name );?></h3>
				<h2><?php the_title(); ?></h2>
			</div>
		</a>
	</div>
</div>
