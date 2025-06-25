<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$roles = array_column(
    carbon_get_theme_option('access_control_roles'),
    'role',
);

Container::make('user_meta', 'Access control')
    ->add_fields([
        Field::make('multiselect', 'access_control', 'User roles')->add_options(
            array_combine(
                array_map('sanitize_title', $roles),
                $roles
            )
        )
    ]);
