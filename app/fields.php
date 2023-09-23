<?php

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    foreach (glob(__DIR__.'/Fields/*.php') as $file) {
        require $file;
    }
    foreach (glob(__DIR__.'/Fields/**/*.php') as $file) {
        require $file;
    }
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    \Carbon_Fields\Carbon_Fields::boot();
}
