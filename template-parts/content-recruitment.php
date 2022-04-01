<?php // @codingStandardsIgnoreLine
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HWI
 */
$recruitment = rwmb_meta( 'recruitment' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container single_recruitment">
		<div class="single_recruitment__header">
			<div class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p><?= esc_html( $recruitment );?></p>
			</div>
			<div class="entry-back">
				<a class="goback" href='javascript:goback()'>< Back</a>
			</div>
		</div>
		<div class="single_recruitment__inner">
			<div class="single_recruitment__content">
				<?php the_content(); ?>
			</div>
			<div class="single_recruitment__sidebar">
				<?php dynamic_sidebar( 'form-contact' ); ?>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php hwi_recruitment_posts(); ?>
