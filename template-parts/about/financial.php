<?php // @codingStandardsIgnoreLine
$title_financial  = rwmb_meta( 'title_financial' );
$text_location    = rwmb_meta( 'text_location' );
$text_gray        = rwmb_meta( 'text_gray' );
$text_blue        = rwmb_meta( 'text_blue' );
$groups_slider    = rwmb_meta( 'group_slider' );
$banner_financial = rwmb_meta( 'banner_financial' );
$text_banner      = rwmb_meta( 'text_banner' );
?>
<section class="financial">
	<div class="container">
		<div class="team__title">
			<h2 class="title"><?= wp_kses_post( $title_financial ); ?></h2>
		</div>
		<h3 class="financial__location"><?= esc_html( $text_location ); ?></h3>
		<div class="financial__symbol">
			<div class="financial__profit">
				<div class="financial__profit--bg"></div>
				<p><?= esc_html( $text_gray ); ?></p>
			</div>
			<div class="financial__over">
				<div class="financial__over--bg"></div>
				<p><?= esc_html( $text_blue ); ?></p>
			</div>
		</div>
		<div class="financial__slider">
			<?php foreach ( $groups_slider as $group_slider ) : ?>
				<?php
				$gray = $group_slider['gray'];
				$blue = $group_slider['blue'];
				$year = $group_slider['number_year']; // @codingStandardsIgnoreLine
				?>
				<div class="financial__item">
					<div class="financial__item--count">
						<div class="count-gray"><h3 class="count"><?= esc_html( $gray ); ?></h3></div>
						<div class="count-blue"><h3 class="count"><?= esc_html( $blue ); ?></h3></div>
					</div>
					<div class="financial__item--year">
						<?= esc_html( $year ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<h3 class="text-year">Year</h3>
	</div>
	<div class="financial__banner">
		<?php
		$images_banner = wp_get_attachment_image_url( $banner_financial['ID'], 'full' );
		?>
			<img src="<?= esc_url( $images_banner ); ?>" alt="">
			<h3 class="text-banner"><?= esc_html( $text_banner ); ?></h3>
		</div>
</section>
