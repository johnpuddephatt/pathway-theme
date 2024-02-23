<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Home signpost'))
    ->add_fields([
        Field::make('text', 'title', __('Title')),
        Field::make('image', 'image', __('Image')),
        Field::make('text', 'url', __('URL')),
        Field::make('checkbox', 'enabled', __('Enabled?')),
        include get_template_directory() .
            '/app/Fields/Fields/BackgroundColours.php',
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.home-signpost', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
