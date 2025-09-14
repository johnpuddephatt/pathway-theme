<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('user_meta', 'Pathway Team')
    ->add_fields([
        Field::make('text', 'user_team', 'Pathway team')
    ]);
