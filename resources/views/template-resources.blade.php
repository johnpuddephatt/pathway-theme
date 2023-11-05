{{--
  Template Name: Resources Template
--}}

@extends('layouts.app')

@section('content')
  <div class="border-t border-blue border-opacity-25">
    <div
      class="container relative mb-12 flex flex-col gap-4 overflow-hidden pt-8 md:flex-row md:items-center md:pt-12 lg:gap-8">

      <div class="relative flex-none pt-12 md:w-1/2 lg:py-16">

        <h1 class="mb-8 max-w-md font-serif text-4xl lg:text-6xl">{!! the_title() !!}</h1>
        <div class="max-w-md text-lg font-semibold lg:text-xl">
          {!! the_excerpt() !!}
        </div>
      </div>

      {!! get_the_post_thumbnail(null, '3by2', [
          'class' => 'clip-hex-top mx-auto w-72  flex-none block md:w-2/5 h-auto object-cover',
      ]) !!}
    </div>
  </div>

  <div x-data="{ show_all: false }" class="bg-beige bg-opacity-20 py-12 text-center">
    <div class="container flex flex-wrap gap-x-8 gap-y-4">
      @foreach ($key_issues as $issue)
        <a href="{{ get_permalink($issue->ID) }}"
          class="rounded bg-beige px-6 py-4 text-center md:w-[calc(50%-1rem)] lg:w-[calc(33%-(4rem/3))]">
          <h2 class="font-bold">{!! $issue->post_title !!}</h2>
        </a>
      @endforeach
      @foreach ($issues as $issue)
        <a x-transition x-show="show_all" href="{{ get_permalink($issue->ID) }}"
          class="rounded bg-beige bg-opacity-50 px-6 py-4 text-center md:w-[calc(50%-1rem)] lg:w-[calc(33%-(4rem/3))]">
          <h2 class="font-bold">{!! $issue->post_title !!}</h2>
        </a>
      @endforeach
    </div>

    <button class="mt-6 rounded-full border-2 border-beige px-8 py-2" x-show="{{ count($issues) }} && !show_all"
      @click="show_all = true">Show all issues</button>

    {{-- <div x-show="show_all" x-transition class="container mt-8 grid gap-x-8 gap-y-4 md:grid-cols-2 lg:grid-cols-3">
    
    </div> --}}
  </div>

  <form id="resources" class="bg-beige bg-opacity-70" role="search"
    action="{{ get_permalink(get_option('page_for_resources')) }}" method="get">
    <div class="container flex flex-wrap gap-y-3 py-12 lg:flex-nowrap">
      <input aria-label="Text to search for" type="text" name="search" placeholder="Search resources by title"
        value="{{ $_GET['search'] ?? '' }}"
        class="max-w-xs flex-1 appearance-none rounded-full border-2 border-beige px-6 py-2 text-lg lg:w-full" />

      <div class="-ml-8 rounded-full bg-white lg:-ml-10 lg:mr-8">
        <input
          class="inline-flex appearance-none rounded-full border-2 border-yellow bg-yellow bg-opacity-90 px-6 py-2 text-center text-lg transition hover:bg-opacity-100"
          type="submit" alt="Search" value="Search" />
      </div>

      <div class="relative ml-auto">
        <select onchange="this.form.submit()"
          class="max-w-xs appearance-none rounded-full border border-beige px-4 py-2 pr-8 text-lg lg:px-6 lg:pr-12"
          name="type">
          <option value="">All types</option>

          @foreach ($types as $key => $type)
            <option {{ $type->term_id == ($_GET['type'] ?? null) ? 'selected' : null }} value="{{ $type->term_id }}">
              {!! $type->name !!}</option>
          @endforeach
        </select>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
          class="pointer-events-none absolute right-3 top-3 h-6 w-6" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

      </div>
      <div class="relative ml-4">

        <select onchange="this.form.submit()"
          class="max-w-xs flex-shrink appearance-none rounded-full border border-beige px-4 py-2 pr-8 text-lg lg:px-6 lg:pr-12"
          name="key_issue">
          <option value="">All issues</option>

          @foreach ($issues as $key => $issue)
            <option {{ $issue->ID == ($_GET['key_issue'] ?? null) ? 'selected' : null }} value="{{ $issue->ID }}">
              {!! $issue->post_title !!}</option>
          @endforeach
        </select>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
          class="pointer-events-none absolute right-3 top-3 h-6 w-6" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>

      </div>

    </div>
  </form>

  @if (!$resources->have_posts())
    <div class="container my-16">
      <x-alert type="warning">
        Sorry, no resources matching your criteria were found.
      </x-alert>
    </div>
  @else
    <h2 class="container mt-16 text-2xl font-semibold">{{ $results_title }}</h2>

    <div class="container mb-16 mt-12 flex flex-col gap-4">
      @while ($resources->have_posts())
        @php($resources->the_post())
        <x-resource-card :resource="get_post()" />
      @endwhile
    </div>
  @endif
  <div class="container mb-16 text-right text-xl">
    {!! paginate_links([
        'total' => $resources->max_num_pages,
        'prev_text' => '<',
        'next_text' => '>',
        'format' => '?page_number=%#%',
        'add_fragment' => '#resources',
        'current' => $_GET['page_number'] ?? 1,
    ]) !!}
  </div>
@endsection
