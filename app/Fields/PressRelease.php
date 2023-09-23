<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * Adds a custom field: "Projects page"; on the "Settings > Reading" page.
 */
add_action( 'admin_init', function () {
    $id = 'page_for_press_releases';
    add_settings_field( $id, 'Press releases page:', 'settings_field_page_for_press_releases', 'reading', 'default', array(
        'label_for' => 'field-' . $id,
        'class'     => 'row-' . $id,
    ) );
} );

function settings_field_page_for_press_releases( $args ) {
    $id = 'page_for_press_releases';
    wp_dropdown_pages( array(
        'name'              => $id,
        'show_option_none'  => '&mdash; Select &mdash;',
        'option_none_value' => '0',
        'selected'          => get_option( $id ),
    ) );
}

add_filter( 'allowed_options', function ( $options ) {
    $options['reading'][] = 'page_for_press_releases';
    return $options;
} );
