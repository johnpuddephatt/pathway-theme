<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Latest posts'))
    ->add_fields([
        Field::make('text', 'title', __('Title'))->set_default_value('Latest posts'),
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.latest-posts', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
