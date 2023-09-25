<a class="flex flex-row items-center gap-4 overflow-hidden rounded bg-beige bg-opacity-30 p-6 !no-underline transition hover:bg-opacity-60 sm:block sm:flex-col"
  href="{{ get_permalink($person->ID) }}">
  {!! get_the_post_thumbnail($person->ID, 'square', [
      'class' => ' !my-0 w-32 sm:w-full  h-auto rounded-full',
  ]) !!}
  <div>
    <h3 class="!mb-1 !mt-2 !text-xl sm:!text-lg">{{ $person->post_title }}</h3>
    <div class="!text-lg leading-none sm:!text-base"> {{ carbon_get_post_meta($person->ID, 'role_title') }}</div>
  </div>
</a>
