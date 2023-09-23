{{--
  Template Name: Vacancies Template
--}}

@extends('layouts.app') @section('content')
  @include('partials.section-header', ['background_colour' => 'bg-yellow'])
  <div class="container mb-24 max-w-5xl space-y-8">

    <div class="page-content">
      {!! the_content() !!}
    </div>

    @if (!$vacancies->have_posts())
      <div class="my-16">
        <x-alert type="warning">
          Sorry, no vacancies were found.
        </x-alert>
      </div>
    @else
      <div class="mb-16 mt-12 flex flex-col gap-8">
        @while ($vacancies->have_posts())
          @php($vacancies->the_post())
          <x-vacancy-card :vacancy="get_post()" />
        @endwhile
      </div>
    @endif

    <div class="container mb-16 text-center text-xl">
      {!! paginate_links([
          'total' => $vacancies->max_num_pages,
          'prev_text' => '<',
          'next_text' => '>',
          'add_fragment' => '#vacancies',
      ]) !!}
    </div>

  </div>
@endsection
