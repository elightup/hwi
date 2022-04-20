<?php // @codingStandardsIgnoreLine.
$title_team   = rwmb_meta( 'title_team' );
$image_banner = rwmb_meta( 'image_banner' );
?>

<section id="team" class="container team">
	<div class="team__banner">
		<div class="team__title">
			<h2 class="title"><?= wp_kses_post( $title_team ); ?></h2>
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
		$slider_ceos = rwmb_meta( 'slider_ceo' );
		foreach ( $slider_ceos as $slider_ceo ) :
			$image_ceo    = $slider_ceo['image_ceo'];
			$content_info = $slider_ceo['text_ceo'];
			$text_founder = $slider_ceo['text_founder'];
			$text_name    = $slider_ceo['text_name'];
			?>
			<div class="seo__item">
				<div class="seo__item--image">
					<?php
					$images_ceo = wp_get_attachment_image_url( $image_ceo, 'full' );
					?>
					<img src="<?= esc_url( $images_ceo ); ?>" alt="">
					<figcaption>
						<div class="text-image"><?= wp_kses_post( wpautop( $content_info ) ); ?></div>
						<div class="ceo-founder">
							<p class="text-founder"><?= esc_html( $text_founder ); ?></p>
							<p class="text-name"><?= esc_html( $text_name ); ?></p>
						</div>
					</figcaption>
					<div class="seo__item--text">
						<p class="founder"><?= esc_html( $text_founder ); ?></p>
						<p class="name"><?= esc_html( $text_name ); ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
