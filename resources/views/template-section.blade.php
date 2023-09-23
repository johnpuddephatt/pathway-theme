{{--
  Template Name: Section Template
--}}

@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    @include('partials.section-header')
    @php(the_content())
  @endwhile
@endsection
