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
		<div id="event-list">
			<div class="list events__wrap ">
				<?php
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						$linkbc = rwmb_meta( 'recruitment' );
						?>
						<a href="<?= esc_url( $linkbc ); ?>" class="item-report" target="_blank">
							<div class="entry-content">
								<p class="date"><?= get_the_date( 'M, dS, Y' ); ?></p>
								<h3 class="entry-title"><?php the_title(); ?></h3>
							</div>
						</a>
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
