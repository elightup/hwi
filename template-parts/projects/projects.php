<?php // @codingStandardsIgnoreLine
$args  = [
	'post_type'      => 'projects',
	'posts_per_page' => -1,
];
$query = new WP_Query( $args );
?>
<section class="projects">
	<div class="container">
		<div class="projects__top">
			<div class="projects__title">
				<h1 class="title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<div class="projects__excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
		<div id="projects-list" class="projects__list">
			<div class="list">
			<?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					$projects = get_the_terms( $post->ID, 'project-type' );
					?>
					<div class="projects__item">
						<?php the_post_thumbnail(); ?>
						<div class="projects__content">
							<a href="<?php the_permalink(); ?>">
								<p class="date"><span><?= get_the_date( 'd/m/Y' );?></span></p>
								<div class="projects__content--title">
									<h3><?= esc_html( $projects[0]->name );?></h3>
									<h2><?php the_title(); ?></h2>
								</div>
							</a>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
			</div>
			<div class="nav-pagination">
				<ul class='pagination'></ul >
			</div>
		</div>
	</div>
</section>
