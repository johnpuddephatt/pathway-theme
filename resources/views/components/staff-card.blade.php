<a class="not-prose flex flex-row items-center gap-4 overflow-hidden rounded bg-beige bg-opacity-30 p-4 !no-underline transition hover:bg-opacity-60 xl:text-base 2xl:px-6"
  href="{{ get_permalink($person->ID) }}">
  <div class="h-24 w-24 overflow-hidden rounded-full bg-beige bg-opacity-50">
    {!! get_the_post_thumbnail($person->ID, 'square-xs', [
        'class' => ' !my-0 w-24 h-24',
    ]) !!}
  </div>
  <div>
    <h3 class="mb-1 text-lg font-semibold leading-tight">{{ $person->post_title }}</h3>
    <div class="text-base font-normal leading-tight"> {{ carbon_get_post_meta($person->ID, 'role_title') }}</div>
  </div>
</a>
