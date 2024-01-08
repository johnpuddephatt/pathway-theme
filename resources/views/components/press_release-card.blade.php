<a href="{{ get_permalink($release->ID) }}"
  class="group relative block overflow-hidden rounded bg-pink bg-opacity-30 !no-underline transition hover:bg-opacity-50">
  <div class="flex flex-row items-center">
    <div class="p-4">
      <div class="mb-2 mt-auto font-semibold">
        {{ get_the_date(null, $release->ID) }}
      </div>

      <h3 class="!my-0 mb-1 text-lg font-semibold !leading-tight md:text-xl lg:text-2xl">{{ $release->post_title }}
      </h3>

    </div>

    @include('partials.card-arrow', ['class' => 'group-hover:bg-pink group-hover:bg-opacity-40'])

  </div>
</a>
