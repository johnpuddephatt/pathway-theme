{{--
  Template Name: Fullwidth Template
--}}

@extends('layouts.app')

@section('content')
  <div class="fullwidth-content">
    @while (have_posts())
      @php(the_post())
      @php(the_content())
    @endwhile
  </div>
@endsection
