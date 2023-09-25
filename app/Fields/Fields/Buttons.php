<?php

use Carbon_Fields\Field;

return Field::make('complex', 'buttons', __('Buttons'))->add_fields([
    Field::make('select', 'page', __('Page'))->set_options(
        array_reduce(get_posts('post_type=page&posts_per_page=-1'), function (
            $result,
            $item
        ) {
            $result[(int) $item->ID] = $item->post_title;

            return $result;
        }) ?? []
    ),
    Field::make('text', 'text', __('Text')),
]);
