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

    public function with() {
        return [
            "events" => new \WP_Query([
                'post_type' => 'event',            
            ]),
        ];
    }
}