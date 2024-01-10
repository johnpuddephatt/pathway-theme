<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Stat'))
    ->add_fields([

        Field::make('text', 'number', __('Number')),
        Field::make('text', 'text', __('Text')),
        @include get_template_directory() .
            '/app/Fields/Fields/BackgroundColours.php',
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.stat', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
