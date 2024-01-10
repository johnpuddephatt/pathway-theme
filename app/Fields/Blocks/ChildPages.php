<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function get_child_pages()
{
    $posts = get_posts('post_type=page&posts_per_page=-1&post_parent='  . (isset($_GET['post']) ? $_GET['post'] : null));

    return count($posts) ? array_reduce($posts, function (
        $result,
        $item
    ) {
        $result[$item->ID] = $item->post_title;
        return $result;
    }) : [];
}

Block::make(__('Child pages'))
    ->add_fields([
        // Field::make('text', 'title', __('Title'))->set_default_value('Latest posts'),
        Field::make('select', 'mode', 'Display as')->set_options(
            [
                'grid' => 'Grid',
                'rows' => 'Rows',
            ]
        )->set_default_value('grid'),

        Field::make('multiselect', 'child_pages', __('Pages'))
            ->help_text('By default all child pages will be shown. If you want to show only specific pages, select them here.')
            ->add_options('get_child_pages')
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        global $post;

        if (!$post) {
            $url_components = parse_url($_SERVER['HTTP_REFERER'], $component = -1);
            parse_str($url_components['query'], $params);
            $post_id = $params['post'];
        }

        echo view('blocks.child-pages-' . ($fields['mode'] ?: 'grid'), [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
            'child_pages' => get_posts([
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post_parent' => $post_id ?? $post?->ID,
                'post__in' => $fields['child_pages'],
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]),

        ])->render();
    });
