<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$parent_options = Container::make(
    'theme_options',
    __('Theme Options')
)->add_fields([
    Field::make('textarea', 'footer_text', __('Footer text')),
]);

Container::make('theme_options', __('Social media'))
    ->set_page_parent($parent_options) // reference to a top level container
    ->add_fields([
        Field::make('text', 'facebook', __('Facebook Link')),
        Field::make('text', 'twitter', __('Twitter Link')),
        Field::make('text', 'instagram', __('Instagram Link')),
        Field::make('text', 'linkedin', __('LinkedIn Link')),
        Field::make('text', 'youtube', __('YouTube Link')),
    ]);

Container::make('theme_options', __('Newsletter'))
    ->set_page_parent($parent_options) // reference to a top level container
    ->add_fields([
        Field::make('textarea', 'newsletter_title', __('Title'))->set_default_value('Newsletter signup'),
        Field::make('text', 'newsletter_button_text', __('Button text'))->set_default_value('Subscribe'),
        Field::make('text', 'newsletter_url', __('URL')),
    ]);

Container::make('theme_options', __('Access control'))
    ->set_page_parent($parent_options) // reference to a top level container
    ->add_fields([
        Field::make('complex', 'access_control_roles', __('Access control roles'))
            ->add_fields(array(
                Field::make('text', 'role', __('Role')),

            ))
    ]);

Container::make('theme_options', __('Login'))
    ->set_page_parent($parent_options) // reference to a top level container
    ->add_fields([

        Field::make('text', 'redirect_after_login_page', __('Redirect after login')),
        Field::make('textarea', 'login_page_message', __('Login page message')),


    ]);
