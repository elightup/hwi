<?php // @codingStandardsIgnoreLine
$title_project = rwmb_meta( 'title_project' );
$text_link     = rwmb_meta( 'text_link_project' );
$url           = rwmb_meta( 'url_project' );
$images        = rwmb_meta( 'image_background' );
$args          = [
	'post_type'      => 'projects',
	'posts_per_page' => 6,
];
$query         = new WP_Query( $args );
?>
<section class="project-home">
	<div class="container">
		<div class="project-home__top">
			<h2 class="title"><?= wp_kses_post( $title_project );?></h2>
			<a href="<?= esc_url( $url );?>" class="seemore"><?= esc_html( $text_link );?><?php Hwi_Icons::render( 'arrow-nexts' ); ?></a>
		</div>
		<div class="project-home__wrap">
			<img class="project-bg" src="<?= esc_url( $images['full_url'] );?>" alt="">
			<div class="project-home__list">
				<?php
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div class="project-home__item">
							<div class="project-home__inner">
								<div class="project-home__image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>
								<div class="project-home__content">
									<?php
									$projects = get_the_terms( $post->ID, 'project-type' );
									?>
									<h3><?= esc_html( $projects[0]->name );?></h3>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="seemore">See project <?php Hwi_Icons::render( 'arrow' ); ?></a>
								</div>
							</div>
						</div>
						<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section>
