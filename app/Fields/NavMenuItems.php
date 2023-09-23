<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('nav_menu_item', __('Menu Settings'))->add_fields([
    Field::make('checkbox', 'crb_is_button', __('Display as button?')),
]);
