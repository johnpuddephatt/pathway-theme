<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Quote'))
    ->add_fields([
        Field::make('text', 'quote', __('Quote'))->set_default_value(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ),
        Field::make(
            'textarea',
            'description',
            __('Description')
        )->set_default_value(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ),
        Field::make('image', 'image', __('Image')),
        Field::make('checkbox', 'reverse', __('Reverse?')),

        include get_template_directory().'/app/Fields/Fields/Buttons.php',
        include get_template_directory().
            '/app/Fields/Fields/BackgroundColours.php',
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.quote', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
