<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class NewsArchive extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index'
    ];

     public function with()
    {
        return [
            'excerpt' =>  get_the_excerpt(get_option('page_for_posts', true)),
            'page_id' => get_option('page_for_posts', true), 
        ];
    }
}
