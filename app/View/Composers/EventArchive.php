<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class EventArchive extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-events',
    ];

    public function with()
    {
        return [
            "events" => new \WP_Query([
                'post_type' => 'event',
                // 'meta_key' => 'start_date',
                // 'orderby' => 'meta_value',
                // 'order' => 'DESC',
                'meta_query' => [
                    [
                        'key' => 'start_date',
                        'compare' => '>=',
                        'value' => current_time('mysql'),
                        'type' => 'DATETIME',
                    ]
                ]
            ]),
            "past_events" => new \WP_Query([
                'post_type' => 'event',
                // 'meta_key' => 'start_date',
                // 'orderby' => 'meta_value',
                // 'order' => 'DESC',
                'meta_query' => [
                    [
                        'key' => 'start_date',
                        'compare' => '<',
                        'value' => current_time('mysql'),
                        'type' => 'DATETIME',
                    ]
                ]
            ]),
        ];
    }
}
