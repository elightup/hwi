<?php // @codingStandardsIgnoreLine
$title_partner = rwmb_meta( 'title_partner' );
$url           = rwmb_meta( 'link_partner' );
$text_link     = rwmb_meta( 'text_link' );
$images        = rwmb_meta( 'image_partner' );
$description   = rwmb_meta( 'description_partner' );
?>
<section class="partner">
	<div class="container">
		<div class="partner__top">
			<h2 class="title"><?= esc_html( $title_partner );?></h2>
			<div class="partner__description">
				<?= wp_kses_post( wpautop( $description ) );?>
			</div>
		</div>
		<div class="partner__wrap">
			<?php
			foreach ( $images as $image ) :
				$img_url = $image['full_url'];
				?>
				<div class="partner__wrap-item">
					<div class="partner__item--image">
						<img src="<?= esc_url( $img_url );?>" alt="">
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>

	</div>
</section>
