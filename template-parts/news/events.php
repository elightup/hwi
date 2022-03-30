<?php // @codingStandardsIgnoreLine
$title_events      = rwmb_meta( 'title_events' );
$description_event = rwmb_meta( 'description_event' );
$events            = rwmb_meta( 'events' );
$id_events         = $events->term_id;
$args              = [
	'post_type'      => 'post',
	'posts_per_page' => -1,
	'cat'            => $id_events,
];
$query             = new WP_Query( $args );
?>
<section class="events">
	<div class="container">
		<h2 class="title"><?= esc_html( $title_events );?></h2>
		<h3 class="description"><?= esc_html( $description_event );?></h3>
		<div class="events__wrap">
			<?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
					<div class="events__item">
						<div class="events__image">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="events__date">
							<p><span class="day"><?= get_the_date( 'd' );?></span><span class="month"><?= get_the_date( 'M' );?></span><span class="year"><?= get_the_date( 'Y' );?></span></p>
						</div>
						<div class="events__content">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="entry-content"><?php the_excerpt(); ?></div>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
