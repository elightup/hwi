<?php // @codingStandardsIgnoreLine
$recruitment             = rwmb_meta( 'recruitment' );
$recruitment_name        = $recruitment->name;
$recruitment_id          = $recruitment->term_id;
$recruitment_description = $recruitment->description;
$args                    = [
	'post_type'      => 'post',
	'posts_per_page' => -1,
	'cat'            => $recruitment_id,
];
$query                   = new WP_Query( $args );
?>
<section class="recruitment">
	<div class="container">
		<h2 class="title"><?= esc_html( $recruitment_name );?></h2>
		<p class="description"><?= esc_html( $recruitment_description );?></p>
		<div class="recruitment__wrap" id="recruitment_list">
			<div class="list">
				<?php
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						$field = rwmb_meta( 'recruitment' );
						?>
						<div class="recruitment__item">
							<div class="recruitment__image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="recruitment__content">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p class="recruitment-field"><?= esc_html( $field );?></p>
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
