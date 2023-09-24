  <a href="{{ get_permalink($event->ID) }}"
    class="group relative block overflow-hidden rounded bg-blue bg-opacity-10 transition hover:bg-opacity-20">
    <div class="flex flex-row items-center gap-12">
      <div class="px-6">

        <h3 class="text-2xl font-bold">{{ $event->post_title }}
        </h3>

        <div class="mt-2 flex flex-row items-center gap-4">

          @if (carbon_get_post_meta(get_the_ID(), 'start_date'))
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mr-0.5 inline-block h-6 w-6 align-bottom">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
              </svg>
              {{ date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'start_date'))) }}
            </div>
          @endif

          @if (carbon_get_post_meta(get_the_ID(), 'location'))
            <div>

              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mr-0.5 inline-block h-6 w-6 align-bottom">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              {{ carbon_get_post_meta(get_the_ID(), 'location') }}
            </div>
          @endif

        </div>

      </div>

      <svg
        class="ml-auto w-32 flex-none border-l border-white px-4 py-8 transition group-hover:bg-blue group-hover:bg-opacity-10"
        xmlns="http://www.w3.org/2000/svg" width="99.87" height="134.55" viewBox="0 0 99.87 134.55">
        <path fill="#fff"
          d="M30.85 61.98a10.76 10.76 0 0 1 .36 10.75L4.87 122.52a8.19 8.19 0 0 0 7.52 12l46.49-1.59a11.37 11.37 0 0 0 9.63-6l30.13-56.52a10.78 10.78 0 0 0-.37-10.75L64.37 5.34a11.38 11.38 0 0 0-10-5.34L7.97 1.6a8.18 8.18 0 0 0-6.68 12.49Z" />
      </svg>
    </div>
  </a>
