<?php // @codingStandardsIgnoreLine.
	$content_history = rwmb_meta( 'content_history' );
	$images_history  = rwmb_meta( 'image_history' );
	$groups_number   = rwmb_meta( 'number' );
?>
<div class="breadcrumbs_page">
	<div class="container">
		<?php echo do_shortcode( '[slim_seo_breadcrumbs separator="/"]' ); ?>
	</div>
</div>
<section id="history" class="container history">
		<div class="history__title">
			<p>01</p>
			<div class="title">Who we are</div>
		</div>
		<div class="history__right">
			<div class="history__inner">
				<div class="history__content">
					<?= wp_kses_post( $content_history ); ?>
				</div>
				<div class="history__image">
					<?php
					foreach ( $images_history as $image ) {
						$url = $image['full_url'];
						?>
							<img src="<?= esc_url( $url ); ?>" alt="">
						<?php
					}
					?>
				</div>
			</div>
			<div class="history__counter">
				<?php foreach ( $groups_number as $group_number ) : ?>
					<?php
					$text_number  = $group_number['text_number'];
					$title_number = $group_number['title_number'];
					?>
					<div class="item">
						<p class="count"><?= esc_html( $text_number ); ?></p>
						<p class="title"><?= esc_html( $title_number ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
</section>
