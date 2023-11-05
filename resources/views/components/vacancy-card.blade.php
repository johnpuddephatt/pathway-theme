  <a href="{{ get_permalink($vacancy->ID) }}"
    class="group relative block overflow-hidden rounded bg-yellow bg-opacity-30 transition hover:bg-opacity-50">
    <div class="flex flex-row items-center gap-12">
      <div class="px-6">

        <h3 class="text-lg font-semibold !leading-tight lg:text-xl">{{ $vacancy->post_title }}
        </h3>

        <div class="mt-1 flex flex-row items-center gap-2">
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
