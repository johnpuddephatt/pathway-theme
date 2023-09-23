<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;


$posts = get_posts('post_type=page&posts_per_page=-1&post_parent='  . (isset($_GET['post']) ? $_GET['post'] : null));

Block::make(__('Child pages'))
    ->add_fields([
        // Field::make('text', 'title', __('Title'))->set_default_value('Latest posts'),
        Field::make('select', 'mode', 'Display as')->set_options(
            [
                'grid' => 'Grid',
                'rows' => 'Rows',
            ]
            )->set_default_value('grid'),
        Field::make( 'multiselect', 'child_pages', __( 'Pages' ) )
        ->help_text('By default all child pages will be shown. If you want to show only specific pages, select them here.')
            ->add_options(count($posts) ? array_reduce($posts, function (
            $result,
            $item
        ) {
            $result[$item->ID] = $item->post_title;
            return $result;
        }) : [])
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        global $post; 

        echo view('blocks.child-pages-' . ($fields['mode'] ?: 'grid'), [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
            'child_pages' => get_posts([
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post_parent' => ( $_GET['post'] ?? null) ??  $post?->ID,
                'post__in' => $fields['child_pages'],
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]),
           
        ])->render();
    });
