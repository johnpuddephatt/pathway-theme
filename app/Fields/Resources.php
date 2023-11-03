<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Adds a custom field: "Projects page"; on the "Settings > Reading" page.
 */
add_action( 'admin_init', function () {
    $id = 'page_for_resources';
    add_settings_field( $id, 'Resources page:', 'settings_field_page_for_resources', 'reading', 'default', array(
        'label_for' => 'field-' . $id,
        'class'     => 'row-' . $id,
    ) );
} );

function settings_field_page_for_resources( $args ) {
    $id = 'page_for_resources';
    wp_dropdown_pages( array(
        'name'              => $id,
        'show_option_none'  => '&mdash; Select &mdash;',
        'option_none_value' => '0',
        'selected'          => get_option( $id ),
    ) );
}

add_filter( 'allowed_options', function ( $options ) {
    $options['reading'][] = 'page_for_resources';
    return $options;
} );

Container::make('post_meta', 'External links')
    ->where('post_type', '=', 'resource')
    ->set_context('side')
    ->add_fields([Field::make('complex', 'links', 'Links')
        ->add_fields([
            Field::make('text', 'link', 'Link URL'),
            Field::make('text', 'label', 'Label'),
        ])
        
        
    ]);

Container::make('post_meta', 'Embed')
    ->where('post_type', '=', 'resource')
    ->set_context('side')
    ->add_fields([Field::make('oembed', 'file_oembed', 'oEmbed URL')]);

Container::make('post_meta', 'Files')
    ->where('post_type', '=', 'resource')
    ->set_context('side')
    ->add_fields([
        Field::make('complex', 'files', 'Files')
        ->add_fields([
            Field::make('text', 'title', 'Title'),
            Field::make('file', 'file', 'File'),
        ])
    ]);

Container::make('post_meta', 'Key issues')
    ->where('post_type', '=', 'resource')
    ->add_fields([
        Field::make('association', 'issues', __(''))->set_types([
            [
                'type' => 'post',
                'post_type' => 'issue',
            ],
        ]),
    ]);
