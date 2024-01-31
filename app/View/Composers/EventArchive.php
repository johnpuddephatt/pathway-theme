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
                // 'meta_type' => 'DATE',
                // 'orderby' => 'meta_value',
                // 'order' => 'DESC',
                'orderby' => ['start_date' => 'DESC'],

                'meta_query' => [
                    'start_date' => [
                        'key' => 'start_date',
                        'compare' => '>=',
                        'value' => date('Y-m-d'),
                        'type' => 'DATE',
                    ]
                ]
            ]),
            "past_events" => new \WP_Query([
                'post_type' => 'event',
                // 'meta_key' => 'start_date',
                // 'meta_type' => 'DATE',
                // 'orderby' => 'meta_value',
                // 'order' => 'DESC',
                'orderby' => ['start_date' => 'DESC'],

                'meta_query' => [
                    'start_date' => [
                        'key' => 'start_date',
                        'compare' => '<',
                        'value' => date('Y-m-d'),
                        'type' => 'DATE',
                    ]
                ]
            ]),
        ];
    }
}
