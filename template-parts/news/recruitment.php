<?php // @codingStandardsIgnoreLine
$recruitment             = rwmb_meta( 'recruitment' );
$recruitment_id          = $recruitment->term_id;
$recruitment_description = $recruitment->description;
$args                    = [
	'post_type'      => 'post',
	'posts_per_page' => -1,
	'cat'            => $recruitment_id,
];
$query                   = new WP_Query( $args );
