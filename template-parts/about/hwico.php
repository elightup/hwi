<?php // @codingStandardsIgnoreLine.
$title_hwico    = rwmb_meta( 'title_hwico' );
$groups_hwico   = rwmb_meta( 'group_hwico' );
$location       = rwmb_meta( 'location' );
$groups_history = rwmb_meta( 'group_accordion' );
?>
<section id="hwico" class="hwico">
	<section class="history-out">
		<div class="container">
			<h2 class="title"><?= esc_html( $location );?></h2>
			<div class="history-out__wrap">
				<?php
				foreach ( $groups_history as $history ) :
					$year    = $history['year'];
					$month   = $history['month'];
					$descrip = $history['description'];
					?>
				<div class="history-out__item">
					<div class="history-out__year">
						<h3><?= esc_html( $year );?></h3>
						<h4><?= esc_html( $month );?></h4>
					</div>
					<div class="except"><?= wp_kses_post( $descrip );?></div>
				</div>
					<?php
				endforeach;
				?>
			</div>
		</div>
	</section>
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
						<p class="item-title"><?= esc_html( $title ); ?></p>
					</div>
					<div class="hwico__item--content">
						<p><?= wp_kses_post( wpautop( $content ) ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
