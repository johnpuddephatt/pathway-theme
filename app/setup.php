<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

require 'fields.php';

add_action('admin_footer-post.php', function () {
    echo view('svg')->render();

    echo <<<'HTML'
<style>

    [data-setting="description"] {
        display: none !important;
    }
    
.cf-textarea__input {
    padding: 8px !important;
}

.edit-post-sidebar .cf-field {
    padding-top: 12px !important;
}

.edit-post-sidebar .cf-complex__group-head {
    border-radius: 4px 4px 0 0 ;
border-color:#e2e4e7 !important;
}

.cf-complex__group-body {
    border-radius: 0 0 4px 4px;
    padding-bottom: 8px !important;
border-width: 1px 1px 1px 1px !important;
border-color:#e2e4e7 !important;
}

.block-editor .cf-complex .cf-field {
    border-width: 0 !important;
}

.cf-multiselect__clear-indicator {
    display: none !important;
}

.cf-multiselect__value-container {
display: flex;
flex-direction: column;
gap: 0.25rem;
align-items: stretch;
}

.cf-multiselect__multi-value + .cf-multiselect__multi-value {
    margin-left: 0 !important;
}

</style>

HTML;
});

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action(
    'wp_enqueue_scripts',
    function () {
        bundle('app')->enqueue();
    },
    100
);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action(
    'enqueue_block_editor_assets',
    function () {
        bundle('editor')->enqueue();
    },
    100
);

add_action( 'edit_form_top', function(){
    return '<div style="margin-top: 10px;padding: 15px;color: #fff;background: #673AB7;clear: both;">
		Place of the hook <b>edit_form_top</b>.
	</div>';
});


/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action(
    'after_setup_theme',
    function () {
        /**
         * Enable features from the Soil plugin if activated.
         *
         * @link https://roots.io/plugins/soil/
         */
        add_theme_support('soil', [
            'clean-up',
            'nav-walker',
            'nice-search',
            'relative-urls',
        ]);

        /**
         * Disable full-site editing support.
         *
         * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
         */
        remove_theme_support('block-templates');

        /**
         * Register the navigation menus.
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus([
            'primary_navigation' => __('Primary Navigation', 'sage'),
            'secondary_navigation' => __('Secondary Navigation', 'sage'),
        ]);

        /**
         * Disable the default block patterns.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
         */
        remove_theme_support('core-block-patterns');

        /**
         * Enable plugins to manage the document title.
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
         */
        add_theme_support('title-tag');

        /**
         * Enable post thumbnail support.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /**
         * Enable responsive embed support.
         *
         * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
         */
        add_theme_support('responsive-embeds');

        /**
         * Enable HTML5 markup support.
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
         */
        add_theme_support('html5', [
            'caption',
            'comment-form',
            'comment-list',
            'gallery',
            'search-form',
            'script',
            'style',
        ]);

        add_post_type_support( 'page', 'excerpt' );


        /**
         * Enable selective refresh for widgets in customizer.
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
         */
        add_theme_support('customize-selective-refresh-widgets');
    },
    20
);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar(
        [
            'name' => __('Primary', 'sage'),
            'id' => 'sidebar-primary',
        ] + $config
    );

    register_sidebar(
        [
            'name' => __('Footer', 'sage'),
            'id' => 'sidebar-footer',
        ] + $config
    );
});

add_image_size('2by1-xxxl', 3000, 1500, true);
add_image_size('2by1-xxl', 2000, 1000, true);
add_image_size('2by1-xl', 1600, 800, true);
add_image_size('2by1-l', 1200, 600, true);
add_image_size('2by1', 800, 400, true);
add_image_size('2by1-s', 480, 240, true);
add_image_size('2by1-xs', 240, 120, true);

add_image_size('3by2-xxxl', 3000, 2000, true);
add_image_size('3by2-xxl', 2400, 1600, true);
add_image_size('3by2-xl', 1500, 1000, true);
add_image_size('3by2-l', 1200, 800, true);
add_image_size('3by2', 900, 600, true);
add_image_size('3by2-s', 450, 300, true);
add_image_size('3by2-xs', 240, 160, true);

add_image_size('square-xl', 1500, 1500, true);
add_image_size('square-l', 1200, 1200, true);
add_image_size('square', 900, 900, true);
add_image_size('square-s', 450, 450, true);
add_image_size('square-xs', 240, 240, true);

add_filter('image_size_names_choose', function ($default_sizes) {
    return array_merge($default_sizes, [
        '2by1' => __('2:1'),
        '3by2' => __('3:2'),
        'square' => __('square'),
    ]);
});
