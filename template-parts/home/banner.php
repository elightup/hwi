<?php // @codingStandardsIgnoreLine
$banners = rwmb_meta( 'slider' );
?>
<section class = 'banner' >
	<div class = 'banner__wrap' >
		<?php
		foreach ( $banners as $banner ) :
			$title       = $banner['title']; // @codingStandardsIgnoreLine
			$description = $banner['description'];
			$text        = $banner['text_link'];
			$url         = $banner['url'];
			$image       = $banner['image'];
			$videos      = $banner['video'];
			?>
			<div class="banner__item">
				<?php
				if ( ! empty( $videos ) ) {
					?>
					<video autoplay muted loop class="banner__video">
						<source src="<?= esc_url( wp_get_attachment_url( $videos[0] ) ); ?>">
					</video>
					<?php
				} else {
					?>
					<img src="<?= esc_url( wp_get_attachment_url( $image ) );?>" alt="<?= esc_html( $title );?>">
					<?php
				}
				?>
				<div class="banner__inner">
					<div class="container">
						<div class="banner__inner--content">
							<?= wp_kses_post( wpautop( $description ) );?>
						</div>
						<a href="<?= esc_url( $url );?>" class="seemore"><?= esc_html( $text );?> <?php Hwi_Icons::render( 'arrow' ) ?></a>
					</div>
				</div>
			</div>
			<?php
			endforeach;
		?>
	</div>
	<div class="banner__nav">
		<?php
		$i = 1;
		foreach ( $banners as $banner ) :
			$title       = $banner['title']; // @codingStandardsIgnoreLine
			?>
			<div class="banner__nav--item">
				<p>0<?= esc_html( $i );?>.</p>
				<h2><?= esc_html( $title );?></h2>
			</div>
			<?php
			$i++;
		endforeach;
		?>
	</div>
</section>
