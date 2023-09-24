  <a href="{{ get_permalink($vacancy->ID) }}"
    class="group relative block overflow-hidden rounded bg-yellow bg-opacity-30 transition hover:bg-opacity-50">
    <div class="flex flex-row items-center gap-12">
      <div class="px-6">

        <h3 class="text-2xl font-bold">{{ $vacancy->post_title }}
        </h3>

        <div class="mt-1 flex flex-row items-center gap-2">
          @if (carbon_get_post_meta(get_the_ID(), 'deadline'))
            <div class="">Deadline:</div>
            {{ date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'deadline'))) }}
            </li>
          @endif
        </div>

      </div>

      <svg
        class="ml-auto w-32 flex-none border-l border-white px-4 py-8 transition group-hover:bg-yellow group-hover:bg-opacity-40"
        xmlns="http://www.w3.org/2000/svg" width="99.87" height="134.55" viewBox="0 0 99.87 134.55">
        <path fill="#fff"
          d="M30.85 61.98a10.76 10.76 0 0 1 .36 10.75L4.87 122.52a8.19 8.19 0 0 0 7.52 12l46.49-1.59a11.37 11.37 0 0 0 9.63-6l30.13-56.52a10.78 10.78 0 0 0-.37-10.75L64.37 5.34a11.38 11.38 0 0 0-10-5.34L7.97 1.6a8.18 8.18 0 0 0-6.68 12.49Z" />
      </svg>
    </div>
  </a>
