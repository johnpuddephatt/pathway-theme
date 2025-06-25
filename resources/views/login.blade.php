{{--
  Template Name: Login
--}}

@extends('layouts.app')

@section('content')
  <div class="flex min-h-screen border-t border-blue/25 bg-beige/20 py-16">
    <div class="container mt-24">
      <div class="!grid grid-cols-2 bg-white shadow-lg">
        {{ the_post_thumbnail('4x3_xl', ['class' => 'h-full object-cover']) }}

        <div class="p-16">
          <h2 class="mb-8 text-xl font-bold">{!! get_the_title() !!}</h2>

          @if (carbon_get_theme_option('login_page_message'))
            <div class="content mb-6 bg-yellow/20 p-6">

              {!! carbon_get_theme_option('login_page_message') !!}

            </div>
          @endif
          <form action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post" class="space-y-4">

            <div class="max-w-sm">
              <label for="user_login" class="text-gray-900 mb-2 block text-sm font-medium dark:text-white">Email
                address</label>
              <input type="text"
                class="bg-gray-50 border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border p-2.5 text-sm dark:text-white"
                placeholder="" name="log" required id="user_login" />
            </div>

            <div class="max-w-sm">
              <label for="user_pass" class="text-gray-900 mb-2 block text-sm font-medium dark:text-white">Password
              </label>
              <input type="password"
                class="bg-gray-50 border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 block w-full rounded-lg border p-2.5 text-sm dark:text-white"
                name="pwd" required id="user_pass" />
            </div>

            <input type="hidden" name="redirect_to"
              value="{{ $_GET['redirect_to'] ?? carbon_get_theme_option('redirect_after_login_page') }}">

            <div class="control flex items-center justify-between pt-12">
              <a class="underline" href="{{ esc_url(wp_lostpassword_url()) }}">Lost your password?</a>
              <button type="submit" class="button is-link">Log in</button>

            </div>

            <input type="hidden" name="testcookie" value="1">
          </form>
        </div>
      </div>
    </div>
  @endsection
