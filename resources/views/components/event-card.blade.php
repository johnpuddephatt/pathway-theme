  <a href="{{ get_permalink($event->ID) }}"
    class="group relative block overflow-hidden rounded bg-blue bg-opacity-10 transition hover:bg-opacity-20">
    <div class="flex flex-row items-center lg:gap-12">
      <div class="flex-1 p-4">

        <h3 class="text-xl font-semibold !leading-tight lg:text-xl">{{ $event->post_title }}
        </h3>

        <div class="mt-2 flex-col items-center gap-4 lg:flex lg:flex-row">

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

      @include('partials.card-arrow', ['class' => 'group-hover:bg-blue group-hover:bg-opacity-10'])
    </div>
  </a>
