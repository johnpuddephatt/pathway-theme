<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Post signpost'))
    ->add_fields([
        Field::make('association', 'post', __('Association'))
            ->set_types([
                [
                    'type' => 'post',
                    'post_type' => 'post',
                ],
            ])
            ->set_max(1),
        Field::make('text', 'title', __('Title override')),
        Field::make('checkbox', 'show_date', __('Show date')),

    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.post-signpost', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
