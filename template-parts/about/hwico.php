<?php // @codingStandardsIgnoreLine.
$title_hwico      = rwmb_meta( 'title_hwico' );
$groups_hwico     = rwmb_meta( 'group_hwico' );
$location         = rwmb_meta( 'location' );
$image_choose     = rwmb_meta( 'image_choose' );
$groups_accordion = rwmb_meta( 'group_accordion' );
?>
<section id="hwico" class="hwico">
	<div class="container">
		<div class="hwico__title">
			<h2 class="title"><?= esc_html( $title_hwico ) ?></h2>
		</div>

		<div class="hwico__wrapper">
			<?php foreach ( $groups_hwico as $group_hwico ) : ?>
				<?php
				$icon       = $group_hwico['icon'];
				$icon_hover = $group_hwico['icon_hover'];
				$title      = $group_hwico['title']; // @codingStandardsIgnoreLine.
				$content    = $group_hwico['content'];
				$image      = $group_hwico['image'];
				?>
				<div class="hwico__item" style="--bg-image: url('<?= esc_url( wp_get_attachment_url( $image ) );?>');">
					<div class="hwico__item--title">
						<div class="icon">
							<?php
							$icons       = wp_get_attachment_image_url( $icon, 'full' );
							$icons_hover = wp_get_attachment_image_url( $icon_hover, 'full' );
							?>
							<img src="<?= esc_url( $icons ); ?>" alt="" class="icon-image">
							<img src="<?= esc_url( $icons_hover ); ?>" alt="" class="icon-hover">
						</div>
						<p class="title"><?= esc_html( $title ); ?></p>
					</div>
					<div class="hwico__item--content">
						<p><?= wp_kses_post( wpautop( $content ) ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="hwico__inner">
		<div class="container">
			<h2 class="location"><?= wp_kses_post( $location ); ?></h2>
			<div class="hwico__total">
				<div class="hwico__choose">
					<div class="hwico__choose--image">
						<?php
							$images_choose = wp_get_attachment_image_url( $image_choose['ID'], 'full' );
						?>
						<img src="<?= esc_url( $images_choose ); ?>" alt="">
					</div>
					<div class="hwico__choose--tab">

							<?php
							$i = 1;
							foreach ( $groups_accordion as $group_accordion ) :
								$title_accordion = $group_accordion['title_accordion'];
								$accordion_body  = $group_accordion['accordion_body'];
								if ( $i === 1 ) {
									$open = 'open';
								} else {
									$open = '';
								}
								?>
								<details <?= esc_html( $open )?>>
								<summary>
									<?= esc_html( $title_accordion ); ?>
								</summary>

								<div class="panel">
									<?= wp_kses_post( wpautop( $accordion_body ) ); ?>
								</div>
								</details>
								<?php
								$i++;
								endforeach;
							?>
					</div>
				</div>
				<div class="background-icon">
					<img src="<?= esc_url( get_template_directory_uri() ) ?>/images/backgroundicon.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
