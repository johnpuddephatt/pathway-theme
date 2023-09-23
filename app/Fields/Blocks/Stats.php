<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Stats'))
    ->add_fields([
        Field::make('text', 'title', __('Title'))->set_default_value(
            'In numbers'
        ),
        Field::make(
            'textarea',
            'description',
            __('Description')
        )->set_default_value('We are proud of our achievements'),
        @include get_template_directory().
            '/app/Fields/Fields/BackgroundColours.php',

        include get_template_directory().'/app/Fields/Fields/Buttons.php',

        Field::make('complex', 'facts', __('Facts'))->add_fields([
            Field::make('text', 'number', __('Number')),
            Field::make('text', 'text', __('Text')),
        ]),
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.stats', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
