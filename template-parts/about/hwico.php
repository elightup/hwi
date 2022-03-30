<?php
$title_hwico      = rwmb_meta( 'title_hwico' );
$groups_hwico     = rwmb_meta( 'group_hwico' );
$location         = rwmb_meta( 'location' );
$image_choose     = rwmb_meta( 'image_choose' );
$groups_accordion = rwmb_meta( 'group_accordion' );
?>
<section id="hwico" class="hwico">
	<div class="container">
		<div class="hwico__title">
			<div class="line">
				<img src="<?php echo get_template_directory_uri() ?>/images/Line 1.png" alt="">
			</div>
			<h2 class="title"><?= $title_hwico ?></h2>
		</div>

		<div class="hwico__wrapper">
			<?php foreach ( $groups_hwico as $group_hwico ) : ?>
				<?php
				$icon       = $group_hwico['icon'];
				$icon_hover = $group_hwico['icon_hover'];
				$title      = $group_hwico['title'];
				$content    = $group_hwico['content'];
				?>
				<div class="hwico__item">
					<div class="hwico__item--title">
						<div class="icon">
							<?php
							$icons       = wp_get_attachment_image_url( $icon, 'full' );
							$icons_hover = wp_get_attachment_image_url( $icon_hover, 'full' );
							?>
							<img src="<?= esc_url( $icons ); ?>" alt="" class="icon-image">
							<img src="<?= esc_url( $icons_hover ); ?>" alt="" class="icon-hover">
						</div>
						<p class="title"><?= $title; ?></p>
					</div>
					<div class="hwico__item--content">
						<p><?= $content; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="hwico__inner">
		<div class="container">
			<h2 class="location"><?= $location; ?></h2>
			<div class="hwico__total">
				<div class="hwico__choose">
					<div class="hwico__choose--image">
						<?php
							$images_choose = wp_get_attachment_image_url( $image_choose['ID'], 'full' );
						?>
						<img src="<?= esc_url( $images_choose ); ?>" alt="">
					</div>
					<div class="hwico__choose--tab">

							<?php foreach ( $groups_accordion as $group_accordion ) : ?>
								<?php
								$title_accordion = $group_accordion['title_accordion'];
								$accordion_body  = $group_accordion['accordion_body'];
								?>
								<details>
								<summary>
									<!-- <div class="icon-accordion"><img src="<?php // echo get_template_directory_uri() ?>/images/tab-right.png" alt=""></div> -->
									<?= $title_accordion; ?>
								</summary>

								<div class="panel">
									<div class="accordion-body">
										<h2><?= $accordion_body; ?></h2>
									</div>
								</div>
								</details>
							<?php endforeach; ?>
					</div>
				</div>
				<div class="background-icon">
					<img src="<?php echo get_template_directory_uri() ?>/images/backgroundicon.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
