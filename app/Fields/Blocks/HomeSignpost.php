<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Home signpost'))
    ->add_fields([
        Field::make('text', 'pre_title', __('Pre-title')),
        Field::make('text', 'title', __('Title')),
        Field::make('text', 'post_title', __('Post-title')),
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
