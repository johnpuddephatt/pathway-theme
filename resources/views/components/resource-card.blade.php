  <a href="{{ get_permalink($resource->ID) }}"
    class="group relative block overflow-hidden rounded bg-yellow bg-opacity-30 transition hover:bg-opacity-40">
    <div class="flex flex-row items-center border-l-8 border-yellow lg:gap-12 lg:border-l-[2rem]">
      <div class="px-3 lg:px-6">

        <h3 class="mb-1 text-xl font-bold !leading-none lg:mb-2 lg:text-2xl">{{ $resource->post_title }}
        </h3>

        <div class="flex flex-col items-start gap-0.5 font-semibold lg:flex-row lg:items-center lg:gap-2">

          {{ get_the_date('Y m', $resource->ID) }}
          @foreach (get_the_terms($resource->ID, 'resource_type') as $term)
            <div
              class="hidden rounded-full bg-white bg-opacity-50 px-4 text-sm font-semibold lowercase antialiased lg:inline-block">
              {{ $term->name }}
            </div>
          @endforeach
        </div>

      </div>
      @include('partials.card-arrow', ['class' => 'group-hover:bg-yellow group-hover:bg-opacity-30'])
    </div>
  </a>
