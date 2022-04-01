<?php // @codingStandardsIgnoreLine
function hwi_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'hwi_archive_title' );

add_filter( 'nav_menu_link_attributes', 'hwi_add_menu_link_attributes', 10, 4 );
add_filter( 'walker_nav_menu_start_el', 'hwi_add_dropdown_icons', 10, 4 );

/**
 * Adjustments to menu attributes to support WCAG 2.0 recommendations for flyout and dropdown menus.
 * @link https://www.w3.org/WAI/tutorials/menus/flyout/
 */
function hwi_add_menu_link_attributes( $atts, $item, $args, $depth ) {
	$item_has_children = in_array( 'menu-item-has-children', $item->classes );
	if ( $item_has_children ) {
		$atts['aria-haspopup'] = 'true';
		$atts['aria-expanded'] = 'false';
	}
	return $atts;
}

function hwi_add_dropdown_icons( $output, $item, $depth, $args ) {
	if ( isset( $args->theme_location ) && 'menu-1' === $args->theme_location && in_array( 'menu-item-has-children', $item->classes, true ) ) {
		// Translators: %s - Menu item title.
		$output = '<div class="menu-text">' . $output . '<button class="sub-menu-toggle" aria-expanded="false"><span class="screen-reader-text">' . esc_html( sprintf( __( 'Show submenu for %s', 'hwi' ), $item->title ) ) . '</span>' . Hwi_Icons::render( 'chevron-down', false ) . '</button></div>';
	}
	return $output;
}

