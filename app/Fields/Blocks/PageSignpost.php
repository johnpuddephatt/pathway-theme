<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Page signpost'))
    ->add_fields([
        Field::make('association', 'page', __('Association'))
            ->set_types([
                [
                    'type' => 'post',
                    'post_type' => 'page',
                ],
            ])
            ->set_max(1),
        Field::make('text', 'title', __('Title override')),

    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.page-signpost', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
