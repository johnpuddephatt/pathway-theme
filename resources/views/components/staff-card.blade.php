<a class="not-prose flex flex-row items-center gap-4 overflow-hidden rounded bg-beige bg-opacity-30 p-6 !no-underline transition hover:bg-opacity-60 sm:block sm:flex-col xl:text-base"
  href="{{ get_permalink($person->ID) }}">
  <div class="mb-4 h-32 w-32 overflow-hidden rounded-full bg-beige bg-opacity-50 lg:h-40 lg:w-40">
    {!! get_the_post_thumbnail($person->ID, 'square-xs', [
        'class' => ' !my-0 w-32 h-32',
    ]) !!}
  </div>
  <div>
    <h3 class="mb-1 mt-2 text-lg font-semibold leading-tight">{{ $person->post_title }}</h3>
    <div class="text-base font-normal leading-tight"> {{ carbon_get_post_meta($person->ID, 'role_title') }}</div>
  </div>
</a>
