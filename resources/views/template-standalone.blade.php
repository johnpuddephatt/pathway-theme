{{--
  Template Name: Standalone Template
--}}

@extends('layouts.app') @section('content')
  @while (have_posts())
    @php(the_post())

    @include('partials.section-header')
    <div class="flex min-h-screen w-full flex-row border-opacity-25">

      <div class="flex-1">
        @includeFirst(['partials.content-page', 'partials.content-single'])
      </div>
  @endwhile
@endsection
