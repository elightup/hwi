<?php // @codingStandardsIgnoreLine
$title_news       = rwmb_meta( 'title_news' );
$news             = rwmb_meta( 'news' );
$news_id          = $news->term_id;
$news_description = $news->description;
$args             = [
	'post_type'      => 'post',
	'posts_per_page' => -1,
	'cat'            => $news_id,
];
$query            = new WP_Query( $args );
?>
<section class="news-posts">
	<div class="container">
		<h2 class="title"><?= esc_html( $title_news );?></h2>
		<p class="description"><?= esc_html( $news_description );?></p>
		<div class="news-posts__wrap" id="news-list">
			<div class="list">
				<?php
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div class="news-posts__item">
							<div class="news-posts__image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="news-posts__content">
								<p class="date"><?= get_the_date( 'd/m/Y' )?></p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
