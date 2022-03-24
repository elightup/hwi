<?php // @codingStandardsIgnoreLine
/*
	Template Name: About
*/
get_header( 'home' );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/about/history' );
	endwhile;
	?>

</main>
<?php

get_footer();
