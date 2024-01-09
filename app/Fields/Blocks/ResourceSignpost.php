<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Resource signpost'))
    ->add_fields([
        Field::make('association', 'resource', __('Association'))
            ->set_types([
                [
                    'type' => 'post',
                    'post_type' => 'resource',
                ],
            ])
            ->set_max(1),
        Field::make('text', 'title', __('Title override')),
        Field::make('checkbox', 'show_date', __('Show date')),
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.resource-signpost', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
