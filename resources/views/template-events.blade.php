{{--
  Template Name: Events Template
--}}

@extends('layouts.app') @section('content')
  @include('partials.section-header', ['background_colour' => 'bg-blue text-white'])
  <div id="events" class="container mb-24 space-y-8 lg:max-w-5xl">

    <div class="page-content prose xl:prose-lg">
      {!! the_content() !!}
    </div>

    @if ($events->have_posts() && $past_events->have_posts())
      <div class="flex flex-row items-center justify-end gap-2">

        <a href="{{ get_permalink() }}?past=1#events"
          class="{{ isset($_GET['past']) ? 'bg-blue text-white' : '' }} inline-block rounded-full bg-opacity-80 px-10 py-2.5 font-semibold transition duration-300 hover:bg-opacity-100">
          Past Events
        </a>
        <a href="{{ get_permalink() }}#events"
          class="{{ isset($_GET['past']) ? '' : 'bg-blue text-white' }} inline-block rounded-full bg-opacity-80 px-10 py-2.5 font-semibold transition duration-300 hover:bg-opacity-100">
          Upcoming Events
        </a>

      </div>
    @endif

    @if (isset($_GET['past']) || ($past_events->have_posts() && !$events->have_posts()))

      @if (!$past_events->have_posts())
        <div class="my-16">
          <x-alert type="warning">
            Sorry, no past events were found.
          </x-alert>
        </div>
      @else
        <div class="mb-16 mt-12 flex flex-col gap-8">
          @while ($past_events->have_posts())
            @php($past_events->the_post())
            <x-event-card :event="get_post()" />
          @endwhile
        </div>
      @endif
    @else
      @if (!$events->have_posts())
        <div class="my-16">
          <x-alert type="warning">
            Sorry, no upcoming events were found.
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

    @endif

  </div>

@endsection
