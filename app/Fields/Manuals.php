<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$roles = array_column(
    carbon_get_theme_option('access_control_roles'),
    'role',
);

Container::make('post_meta', 'Access control')
    ->where('post_type', '=', 'manual')
    ->set_context('side')
    ->add_fields([
        Field::make('multiselect', 'access_control', 'Limit access to the following:')->add_options(
            array_combine(
                array_map('sanitize_title', $roles),
                $roles
            )
        )
    ]);


Container::make('post_meta', 'Redirect')
    ->where('post_type', '=', 'manual')
    ->set_context('side')
    ->add_fields([
        Field::make('checkbox', 'redirect_to_child', 'Redirect to first child page')
    ]);
