<?php // @codingStandardsIgnoreLine
$title_testimonial = rwmb_meta( 'title_testimonial' );
$clients           = rwmb_meta( 'client' );
?>
<section class="testimonial">
	<div class="container">
		<h2 class="title"><?= wp_kses_post( $title_testimonial );?></h2>
		<div class="testimonial__list">
			<?php
			foreach ( $clients as $client ) :
				$name     = $client['name'];
				$position = $client['position'];
				$content  = $client['content'];
				$image    = $client['image'];
				?>
				<div class="testimonial__item">
					<div class="testimonial__inner">
						<img src="<?= esc_url( wp_get_attachment_url( $image ) );?>" alt="<?= esc_html( $name );?>">
						<div class="testimonial__content">
							<h2><?= esc_html( $name );?></h2>
							<h3><?= esc_html( $position );?></h3>
							<p><?= wp_kses_post( wpautop( $content ) );?></p>
						</div>
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
