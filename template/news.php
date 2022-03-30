<?php // @codingStandardsIgnoreLine
/**
	Template Name: News
 */
get_header( 'home' );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/news/events' );
		get_template_part( 'template-parts/news/news-post' );
		get_template_part( 'template-parts/news/recruitment' );
	endwhile;
	?>

</main>
<?php

get_footer();
