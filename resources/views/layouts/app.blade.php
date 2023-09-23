<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

<main class="min-h-screen" id="main">@yield('content')</main>

@include('sections.footer')

@include('svg')
