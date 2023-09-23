<a href="{{ get_permalink($release->ID) }}"
  class="relative block overflow-hidden rounded bg-pink bg-opacity-60 !no-underline">
  <div class="flex flex-row items-center gap-12 border-l-[2rem] border-pink">
    <div class="px-6">
      <h3 class="!my-0 text-2xl font-bold">{{ $release->post_title }}
      </h3>
      <div class="flex flex-row items-center gap-2 font-bold text-blue">
        {{ get_the_date(null, $release->ID) }}
      </div>
    </div>

    <svg class="ml-auto w-32 border-l border-white px-4 py-8" xmlns="http://www.w3.org/2000/svg" width="99.87"
      height="134.55" viewBox="0 0 99.87 134.55">
      <path fill="#fff"
        d="M30.85 61.98a10.76 10.76 0 0 1 .36 10.75L4.87 122.52a8.19 8.19 0 0 0 7.52 12l46.49-1.59a11.37 11.37 0 0 0 9.63-6l30.13-56.52a10.78 10.78 0 0 0-.37-10.75L64.37 5.34a11.38 11.38 0 0 0-10-5.34L7.97 1.6a8.18 8.18 0 0 0-6.68 12.49Z" />
    </svg>
  </div>
</a>
