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
	<div class="container single-project">
		<div class="breadcrumbs">
			<?php echo do_shortcode( '[slim_seo_breadcrumbs]' ); ?>
		</div>
		<header class="entry-header">
			<div class="single-project__title">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</div>
			<div class="single-project__back">
				<a class="goback" href='javascript:goback()'>< Back</a>
				<p class="complete">Projects that we completed</p>
			</div>
		</header><!-- .entry-header -->
		<div class="single-project__wrap">
			<div class="single-project__thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="single-project__content">
				<div class="entry-top">
					<div class="entry-date">
						<p>Date</p>
						<p class="date"><?= get_the_date( 'd/m/Y' );?></p>
					</div>
					<div class="entry-client">
						<p>Client</p>
						<p class="date">
							<?php
							$client = rwmb_meta( 'client' );
								echo esc_html( $client );
							?>
						</p>
					</div>
					<div class="entry-type">
						<p>Type</p>
						<p class="date">
							<?php
							$projects = get_the_terms( $post->ID, 'project-type' );
							echo esc_html( $projects[0]->name );
							?>
						</p>
					</div>
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="single-project__share">
				<p>Share: </p>
				<ul>
					<li><a class="share" href="https://www.facebook.com/sharer/sharer.php?u=<?= esc_url( get_permalink() ); ?>" target="_blank"><?php Hwi_Icons::render( 'face' ) ?></a></li>
					<li><a class="share" href="https://twitter.com/share?text=&url=<?= urlencode( get_permalink() ); ?>" target="_blank"><?php Hwi_Icons::render( 'twitter' ) ?></a></li>
					<li><a class="share" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= esc_url( get_permalink() );?>" target="_blank"><?php Hwi_Icons::render( 'linkedin' ) ?></a></li>
					<li><a class="share" href="#" target="_blank"><?php Hwi_Icons::render( 'email' ) ?></a></li>
				</ul>
			</div>
			<div id="gallery-image">
				<div class="list single-project__gallery popup-gallery">
					<?php
					$images = rwmb_meta( 'gallery_image' );
					foreach ( $images as $image ) :
						$img_url = $image['full_url'];
						?>
						<div class="single-project__image">
							<a class="single-project__image--item" href="<?= esc_url( $img_url );?>"><img src="<?= esc_url( $img_url );?>" alt=""></a>
						</div>
						<?php
					endforeach;
					?>
				</div>
				<div class="nav-pagination">
					<ul class='pagination'></ul >
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
