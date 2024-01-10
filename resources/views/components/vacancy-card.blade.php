  <a href="{{ get_permalink($vacancy->ID) }}"
    class="group relative block overflow-hidden rounded bg-yellow bg-opacity-30 transition hover:bg-opacity-50">
    <div class="flex flex-row items-center border-l-8 border-yellow border-opacity-75 lg:gap-12 lg:border-l-[1.25rem]">
      <div class="flex-1 px-6 pb-2 pt-4">

        <h3 class="text-lg font-semibold !leading-tight md:text-xl lg:text-2xl">{{ $vacancy->post_title }}
        </h3>

        <div class="mt-1 flex flex-row items-center gap-2 text-blue text-opacity-80">
          @if (carbon_get_post_meta(get_the_ID(), 'deadline'))
            <div class="">Deadline:</div>
            {{ date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'deadline'))) }}
            </li>
          @endif
        </div>

      </div>

      @include('partials.card-arrow', ['class' => 'group-hover:bg-yellow group-hover:bg-opacity-40'])
    </div>
  </a>
