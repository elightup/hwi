<?php // @codingStandardsIgnoreLine
$about       = rwmb_meta( 'about_us' );
$numbers     = rwmb_meta( 'group_number' );
$title   	 = rwmb_meta( 'title_about' );// @codingStandardsIgnoreLine
$image       = rwmb_meta( 'image_about' );
$year_number = rwmb_meta( 'year_number' );
$description = rwmb_meta( 'description_year' );
?>
<section class="about-home" id="about">
	<div class="container">
		<div class="about-home__wrap">
			<div class="about-home__left">
				<h2 class="title"><?= wp_kses_post( $title );?></h2>
				<div class="about-home__image">
					<img src="<?= esc_url( $image['full_url'] );?>" alt="<?= esc_html( $title );?>">
					<div class="about-home__image--content">
						<h2 class="fadeInUp wow" data-wow-duration="1s" data-wow-delay="0s"><?= esc_html( $year_number );?></h2>
						<h3 class="fadeInLeft wow" data-wow-duration="1s" data-wow-delay="0s"><?= esc_html( $description );?></h3>
					</div>
				</div>
			</div>
			<div class="about-home__right fadeInUp wow" data-wow-duration="1s" data-wow-delay="0s">
				<?= wp_kses_post( wpautop( $about ) );?>
				<div class="about-home__number">
					<?php
					foreach ( $numbers as $number ) :
						$num  = $number['number'];
						$text = $number['title'];
						?>
						<div class="about-home__item">
							<h2 class="count"><?= esc_html( $num );?></h2>
							<p><?= esc_html( $text );?></p>
						</div>
						<?php
					endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
