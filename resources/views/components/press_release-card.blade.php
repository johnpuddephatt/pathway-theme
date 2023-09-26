<a href="{{ get_permalink($release->ID) }}"
  class="group relative block overflow-hidden rounded bg-pink bg-opacity-30 !no-underline transition hover:bg-opacity-50">
  <div class="flex flex-row items-center">
    <div class="p-4">

      <h3 class="!my-0 mb-1 !text-lg font-bold !leading-tight md:!text-2xl">{{ $release->post_title }}
      </h3>

      <div class="text-blue">
        {{ get_the_date(null, $release->ID) }}
      </div>

    </div>

    @include('partials.card-arrow', ['class' => 'group-hover:bg-pink group-hover:bg-opacity-40'])

  </div>
</a>
