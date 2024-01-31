  <a href="{{ get_permalink($event->ID) }}"
    class="group relative block overflow-hidden rounded bg-blue bg-opacity-10 transition hover:bg-opacity-20">
    <div class="flex flex-row items-center border-l-8 border-blue border-opacity-75 lg:gap-12 lg:border-l-[1.25rem]">
      <div class="flex-1 px-6 pb-2 pt-4">

        <h3 class="text-lg font-semibold !leading-tight md:text-xl lg:text-2xl">{{ $event->post_title }}
        </h3>

        <div class="mt-2 flex-col items-center gap-4 text-blue text-opacity-80 lg:flex lg:flex-row lg:gap-6">

          @if (carbon_get_post_meta(get_the_ID(), 'start_date'))
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mr-0.5 inline-block h-6 w-6 align-bottom opacity-50">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
              </svg>
              {{ date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'start_date'))) }}
              @if (carbon_get_post_meta(get_the_ID(), 'end_date'))
                &ndash; {{ date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'end_date'))) }}
              @endif
            </div>
          @endif

          @if (carbon_get_post_meta(get_the_ID(), 'location'))
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mr-0.5 inline-block h-6 w-6 align-bottom opacity-50">
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
