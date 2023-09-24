<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * Adds a custom field: "Projects page"; on the "Settings > Reading" page.
 */
add_action( 'admin_init', function () {
    $id = 'page_for_vacancys';
    add_settings_field( $id, 'Vacancies page:', 'settings_field_page_for_vacancys', 'reading', 'default', array(
        'label_for' => 'field-' . $id,
        'class'     => 'row-' . $id,
    ) );
} );

function settings_field_page_for_vacancys( $args ) {
    $id = 'page_for_vacancys';
    wp_dropdown_pages( array(
        'name'              => $id,
        'show_option_none'  => '&mdash; Select &mdash;',
        'option_none_value' => '0',
        'selected'          => get_option( $id ),
    ) );
}

add_filter( 'allowed_options', function ( $options ) {
    $options['reading'][] = 'page_for_vacancys';
    return $options;
} );


Container::make('post_meta', 'Vacancy details')
    ->where('post_type', '=', 'vacancy')
    ->set_context('side')
    ->add_fields([
        Field::make('date', 'deadline', 'Deadline'),
        Field::make('text', 'contract_type', 'Contract type'),
        Field::make('text', 'salary', 'Salary'),
        Field::make('text', 'hours', 'Hours'),
        Field::make('text', 'location', 'Location type'),
    ]);