<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'admin_init', function () {
    $id = 'page_for_people';
    add_settings_field( $id, 'People page:', 'settings_field_page_for_people', 'reading', 'default', array(
        'label_for' => 'field-' . $id,
        'class'     => 'row-' . $id,
    ) );
} );

function settings_field_page_for_people( $args ) {
    $id = 'page_for_people';
    wp_dropdown_pages( array(
        'name'              => $id,
        'show_option_none'  => '&mdash; Select &mdash;',
        'option_none_value' => '0',
        'selected'          => get_option( $id ),
    ) );
}

add_filter( 'allowed_options', function ( $options ) {
    $options['reading'][] = 'page_for_people';
    return $options;
} );


Container::make('post_meta', 'Role')
    ->where('post_type', '=', 'person')
    ->set_context('side')
    ->add_fields([
        Field::make('text', 'role_title', 'Role title')
    ]);