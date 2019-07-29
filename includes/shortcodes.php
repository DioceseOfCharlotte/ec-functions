<?php

# Register shortcodes.
add_action( 'init', 'ec_register_shortcodes' );

function ec_register_shortcodes() {
	add_shortcode( 'ec-listrow', 'ec_listrow_shortcode' );
}

// Gravity Forms listrow.
// [ec-listrow entry="{entry_id}" field="27" row="3" column_title="Title of Column"]
function ec_listrow_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'entry'        => '1',
			'field'        => '1',
			'row'          => '0',
			'column_title' => '',
		),
		$atts,
		'ec-listrow'
	);

	$entry  = GFAPI::get_entry( $atts['entry'] );
	$row    = $atts['row'];
	$field  = $atts['field'];
	$column = $atts['column_title'];

	$lists = maybe_unserialize( rgars( $entry, $field ) );

	$listrow = '';

	foreach ( $lists[ $row ] as $rows => $cell ) {
		$listrow .= $cell;
		$listrow .= ' ';
	}
	$listrow = rtrim( $listrow );

	if ( $column ) {
		$listrow = $lists[ $row ][ $column ];
	}

	return $listrow;
}
