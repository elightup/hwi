<?php // @codingStandardsIgnoreLine
/**
	Template Name: Partner
 */
get_header( 'home' );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/partner/partner' );
		// get_template_part( 'template-parts/partner/testimonial' );
	endwhile;
	?>

</main>
<?php

get_footer();
