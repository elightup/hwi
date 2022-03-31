<?php // @codingStandardsIgnoreLine
/**
	Template Name: Contact
 */
get_header( 'home' );
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/about/contact' );
	endwhile;
	?>

</main>
<?php

get_footer();
