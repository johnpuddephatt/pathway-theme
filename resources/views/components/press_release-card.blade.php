<a href="{{ get_permalink($release->ID) }}"
  class="group relative block overflow-hidden rounded bg-pink bg-opacity-30 !no-underline transition hover:bg-opacity-50">
  <div class="flex flex-row items-center">
    <div class="px-4 py-6">
      <div class="mb-2 mt-auto font-semibold">
        {{ get_the_date(null, $release->ID) }}
      </div>

      <h3 class="!my-0 mb-1 text-lg font-semibold !leading-tight lg:text-xl">{{ $release->post_title }}
      </h3>

    </div>

    @include('partials.card-arrow', ['class' => 'group-hover:bg-pink group-hover:bg-opacity-40'])

  </div>
</a>
