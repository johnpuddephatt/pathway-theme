@if (isset($fields->resource[0]['id']))
  @php($resource = get_post($fields->resource[0]['id']))

  <a href="{{ get_permalink($resource->ID) }}"
    class="wp-block not-prose group relative block overflow-hidden rounded bg-yellow bg-opacity-30 font-normal !no-underline transition hover:bg-opacity-40">
    <div class="flex flex-row items-center border-l-8 border-yellow lg:border-l-[1.25rem]">

      <div class="flex-1 p-4">
        <div class="mb-1 text-sm font-semibold leading-tight antialiased"> {{ get_the_date('F Y', $resource->ID) }}
        </div>

        <h3 class="mb-3 text-xl font-semibold !leading-tight">{{ $resource->post_title }}
        </h3>

        <div class="flex flex-row items-center gap-0.5 lg:gap-1">

          @foreach (get_the_terms($resource->ID, 'resource_type') as $term)
            <div
              class="hidden rounded bg-white bg-opacity-60 px-2 py-0.5 text-sm !font-semibold lowercase antialiased lg:inline-block">
              {{ $term->name }}
            </div>
          @endforeach
        </div>

      </div>
      @include('partials.card-arrow', ['class' => 'group-hover:bg-yellow group-hover:bg-opacity-30'])
    </div>
  </a>

@endif
