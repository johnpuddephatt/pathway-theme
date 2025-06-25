<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Pullout'))
    ->add_fields([
        Field::make('text', 'title', __('Title'))->set_default_value(
            'Pullout title'
        ),
        Field::make('rich_text', 'content', __('Content'))
            ->set_default_value(
                'This is the content of the pullout. You can add any HTML or text here.'
            ),
        include get_template_directory() .
            '/app/Fields/Fields/BackgroundColours.php',
    ])
    ->set_mode('preview')
    ->set_inner_blocks(true)
    ->set_inner_blocks_position('below')

    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        echo view('blocks.pullout', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
        ])->render();
    });
