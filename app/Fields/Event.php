<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * Adds a custom field: "Projects page"; on the "Settings > Reading" page.
 */
add_action('admin_init', function () {
    $id = 'page_for_events';
    add_settings_field($id, 'Events page:', 'settings_field_page_for_events', 'reading', 'default', array(
        'label_for' => 'field-' . $id,
        'class'     => 'row-' . $id,
    ));
});

function settings_field_page_for_events($args)
{
    $id = 'page_for_events';
    wp_dropdown_pages(array(
        'name'              => $id,
        'show_option_none'  => '&mdash; Select &mdash;',
        'option_none_value' => '0',
        'selected'          => get_option($id),
    ));
}

add_filter('allowed_options', function ($options) {
    $options['reading'][] = 'page_for_events';
    return $options;
});


Container::make('post_meta', 'Event details')
    ->where('post_type', '=', 'event')
    ->set_context('side')
    ->add_fields([
        Field::make('date', 'start_date', 'Start date')->set_storage_format('Y-m-d'),
        Field::make('date', 'end_date', 'End date')->set_storage_format('Y-m-d'),
        Field::make('text', 'time', 'Time'),
        Field::make('text', 'location', 'Location'),
        Field::make('text', 'booking_link', 'Booking link'),
    ]);
