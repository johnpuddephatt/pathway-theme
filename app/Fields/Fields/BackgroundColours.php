<?php

use Carbon_Fields\Field;

return Field::make('select', 'background_colour', __('Background colour'))
    ->set_options([
        '' => 'Default',
        'bg-pink' => 'Pink',
        'bg-yellow' => 'Yellow',
        'bg-green' => 'Green',
        'bg-beige' => 'Beige',
    ])
    ->set_default_value('bg-beige');
