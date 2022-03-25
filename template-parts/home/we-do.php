<?php // @codingStandardsIgnoreLine
$works = rwmb_meta( 'we_do_it' );
?>
<section class="we-do">
	<div class="container">
		<div class="we-do__wrap">
			<?php
			foreach ( $works as $work ) :
				$image       = $work['image'];
				$title_work  = $work['title'];
				$description = $work['description'];
				$text_link   = $work['text_link'];
				$url         = $work['text_link'];
				?>
				<div class="we-do__item">
					<div class="we-do__image">
						<?php
						echo wp_get_attachment_image( $image, 'full', false );
						?>
						<figcaption>
							<div class="we-do__content">
								<h3><?= wp_kses_post( $title_work ); ?></h3>
								<?= wp_kses_post( wpautop( $description ) ); ?>
							</div>
							<a href="<?= esc_url( $url ); ?>" class="seemore"><?= esc_html( $text_link ); ?> <?php Hwi_Icons::render( 'arrow' ) ?></a>
						</figcaption>
					</div>
					<div class="we-do__title">
						<h3><?= wp_kses_post( wpautop( $title_work ) ); ?></h3>
					</div>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
