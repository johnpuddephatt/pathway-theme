<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Resource signpost with quote'))
    ->add_fields([
        Field::make('textarea', 'quote', __('Quote'))->set_default_value(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ),
        Field::make(
            'text',
            'citation',
            __('Citation/Description')
        ),
        Field::make('image', 'image', __('Image')),
        Field::make('association', 'resource', __('Association'))
            ->set_types([
                [
                    'type' => 'post',
                    'post_type' => 'resource',
                ],
            ])
            ->set_max(1),
        Field::make('text', 'title', __('Resource title override')),

    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.resource-signpost-with-quote', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
            'resource' => isset($fields['resource'][0]['id']) ? get_post($fields['resource'][0]['id']) : null,

        ])->render();
    });
