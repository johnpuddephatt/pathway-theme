<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Signpost'))
    ->add_fields([
        Field::make('text', 'title', __('Title')),
        Field::make('textarea', 'description', __('Description')),
        Field::make('image', 'image', __('Image')),
        Field::make('checkbox', 'reverse', __('Reverse?')),
        include get_template_directory().
            '/app/Fields/Fields/BackgroundColours.php',
        include get_template_directory().'/app/Fields/Fields/Buttons.php',
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.signpost', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
