<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;



Block::make(__('Press releases'))
    ->add_fields([
      
    ])
    ->set_mode('preview')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        global $post; 
        $currentPage = $_GET['page_number'] ?? 1;
        echo view('blocks.press-releases', [
            'fields' => (object) $fields,
            'attributes' => $attributes,
            'inner_blocks' => $inner_blocks,
            'press_releases' =>  new \WP_Query([
                    'post_type' => 'press_release',
                    'paged' => (int) $currentPage,
                    "s" => $_GET['search'] ?? null,
                    'order' => isset($_GET['order']) ? $_GET['order'] : 'DESC',
                ]),
           
        ])->render();
    });
