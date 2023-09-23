@extends('layouts.app') @section('content')
  @while (have_posts())
    @php(the_post())
    <div class="flex min-h-screen w-full flex-row border-t border-blue border-opacity-25">

      @include('partials.page-sidebar')
      <div class="flex-1 pt-12">
        @include('partials.page-header')

        @includeFirst(['partials.content-page', 'partials.content-single']) @include('partials.page-siblings')
      </div>
    </div>
  @endwhile
@endsection
