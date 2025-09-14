<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;


add_role('manual', 'Manual user', array(
    'read' => true, // True allows that capability
    'edit_posts' => false,
    'delete_posts' => false, // Use false to explicitly deny
));

add_action(
    'template_redirect',
    function () {
        global $post;
        if (is_admin() || current_user_can('manage_options') ||  get_post_type() !== 'manual' || !$post->post_parent) {
            return; // Skip admin area and admins
        }

        // if user is not logged in, check if the post type is 'manual' and redirect to the manual top-level page
        if (!is_user_logged_in()) {
            $has_access = false;
        } else {
            // if the user is logged in but does not have access to the specific page, redirect to access denied page.
            $user_access = carbon_get_user_meta(get_current_user_id(), 'access_control');
            $manual_access = carbon_get_post_meta(get_the_ID(), 'access_control');

            if (!$manual_access) {
                $has_access = true;
            } elseif (is_array($manual_access) && is_array($user_access)) {
                $has_access = count(array_intersect($manual_access, $user_access)) > 0;
            } else {
                $has_access = false;
            }
        }


        if (!$has_access) {
            $parents = get_post_ancestors(get_the_ID());
            wp_redirect(get_permalink(end($parents)) . '?access_denied=true', 301);
            exit;
        }
    }
);


add_action(
    'template_redirect',
    function () {

        global $post;
        if (carbon_get_post_meta($post->ID, 'redirect_to_child')) {

            $pageChildren = get_pages([
                'post_type' => 'manual',
                'child_of' => $post->ID,
                'sort_column' => 'menu_order',
                'sort_order' => 'ASC',
                // 'number' => 1, // Get only the first child
            ]);



            if ($pageChildren) {

                wp_redirect(get_permalink($pageChildren[0]->ID));
                exit();
            }
        }
    }
);
