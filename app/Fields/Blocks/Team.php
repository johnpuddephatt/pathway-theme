<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;


Block::make(__('Team members'))
    ->add_fields([
        Field::make('text', 'title', __('Title'))->set_default_value(
            'Team members'
        ),
        Field::make('textarea', 'description', __('Description')),
        Field::make('association', 'role_type', __('Role type'))
            ->set_max(1)
            ->set_types(array(
                array(
                    'type'     => 'term',
                    'taxonomy' => 'role_type',
                )
            ))

    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {



        echo view('blocks.staff-grid', [
            'fields' => (object) $fields,
            'staff' => get_posts([
                'post_type' => 'person',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'numberposts' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'role_type',
                        'operator' => 'IN',
                        'field' => 'term_id',
                        'terms' => array_map(function ($item) {
                            return $item['id'];
                        }, $fields['role_type'])
                    ],
                ],
            ]),
        ])->render();
    });
