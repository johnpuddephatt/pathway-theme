<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Container::make('post_meta', 'URL')
//     ->where('post_type', '=', 'resource')
//     ->set_context('side')
//     ->add_fields([Field::make('text', 'crb_url', 'External URL')]);

Container::make('post_meta', 'Type')
    ->where('post_type', '=', 'issue')
    ->set_context('side')
    ->add_fields([Field::make('select', 'featured', 'Issue type')->set_options([
        0 => 'Regular',
        1 => 'Featured',
    ])->help_text('Featured issues are given prominence on the site.')
]);
