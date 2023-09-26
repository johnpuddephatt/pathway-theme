<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Resource extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-resource',
    ];

    public function with() {    
        global $post;

        return [
            "file_uploads" => carbon_get_post_meta($post->ID, 'files') ? get_posts(['post_type' => 'attachment', 'post__in' =>  carbon_get_post_meta($post->ID, 'files')]) : null,
            "file_oembed" => carbon_get_post_meta($post->ID,'file_oembed') ? (new \WP_oEmbed())->get_data(carbon_get_post_meta($post->ID,'file_oembed')) : null,
            "external_links" => carbon_get_post_meta($post->ID, 'links'),
            "types" => get_the_terms($post->ID, 'resource_type'),
            // "issue_ids" => carbon_get_post_meta( $post->ID, 'issues' ),
            "issues" => get_posts([
                'post_type' => 'issue',
                'posts_per_page' => -1,
                'post__in' => $this->issue_ids(),
            ]),
            "related_resources" => $this->get_related_resources(),
        ];
    }

    public function get_related_resources() {
        if(count($this->issue_ids())) {
            $meta_query = [
                'relation' => 'OR',
            ];
        foreach($this->issue_ids() as $issue_id) {
            $meta_query[] = [
                'key' => 'issues',
                'value' => 'post:issue:' . $issue_id
            ];
        }

            return get_posts([
                'numberposts' => 3,
                'post_type' => 'resource',
                'exclude' => get_the_ID(),
                'meta_query' => $meta_query
               
            ]);        
        }
    }

    public function issue_ids() {
                global $post;

        return array_reduce(carbon_get_post_meta( $post->ID, 'issues' ), function($carry, $item) {
                    $carry[] = $item['id'];
                    return $carry;
                }, []);
           
    }

}