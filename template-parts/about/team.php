<?php // @codingStandardsIgnoreLine.
$title_team   = rwmb_meta( 'title_team' );
$image_banner = rwmb_meta( 'image_banner' );
$slider_ceos  = rwmb_meta( 'slider_ceo' );
?>

<section id="team" class="container team">
	<div class="team__banner">
		<div class="team__title">
			<div class="line">
				<img src="<?php echo get_template_directory_uri() ?>/images/Line 1.png" alt="">
			</div>
			<h2 class="title"><?= $title_team; ?></h2>
		</div>
		<div class="banner">
			<?php
			$image_banner = wp_get_attachment_image_url( $image_banner['ID'], 'full' );
			?>
			<img src="<?= esc_url( $image_banner ); ?>" alt="">
		</div>
	</div>
</section>
<section class="ceo">
	<div class="seo__slider">
		<?php
		foreach ( $slider_ceos as $slider_ceo ) :
			$image_ceo    = $slider_ceo['image_ceo'];
			$content_info = $slider_ceo['text_ceo'];
			$text_founder = $slider_ceo['text_founder'];
			$text_name    = $slider_ceo['text_name'];
			$founder      = $slider_ceo['founder'];
			$ceo          = $slider_ceo['ceo'];
			?>
			<div class="seo__item">
				<div class="seo__item--image">
					<?php
					$images_ceo = wp_get_attachment_image_url( $image_ceo, 'full' );
					?>
					<img src="<?= esc_url( $images_ceo ); ?>" alt="">
					<figcaption>
						<h2 class="text-image"><?= $content_info; ?></h2>
						<div class="ceo-founder">
							<p class="text-founder"><?= $text_founder; ?></p>
							<p class="text-name"><?= $text_name; ?></p>
						</div>
					</figcaption>
					<div class="seo__item--text">
						<p class="founder"><?= $founder; ?></p>
						<p class="name"><?= $ceo; ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
