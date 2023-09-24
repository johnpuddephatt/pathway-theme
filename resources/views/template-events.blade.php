{{--
  Template Name: Events Template
--}}

@extends('layouts.app') @section('content')
  @include('partials.section-header', ['background_colour' => 'bg-blue text-white'])
  <div id="events" class="container mb-24 max-w-5xl space-y-8">

    <div class="page-content">
      {!! the_content() !!}
    </div>

    @if (!$events->have_posts())
      <div class="my-16">
        <x-alert type="warning">
          Sorry, no events were found.
        </x-alert>
      </div>
    @else
      <div class="mb-16 mt-12 flex flex-col gap-8">
        @while ($events->have_posts())
          @php($events->the_post())
          <x-event-card :event="get_post()" />
        @endwhile
      </div>
    @endif

    <div class="container mb-16 text-right text-xl">
      {!! paginate_links([
          'total' => $events->max_num_pages,
          'prev_text' => '<',
          'next_text' => '>',
          'add_fragment' => '#events',
      ]) !!}
    </div>

  </div>
@endsection
