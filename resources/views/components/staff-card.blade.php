<a class="block overflow-hidden rounded bg-beige bg-opacity-30 p-6 !no-underline transition hover:bg-opacity-60"
  href="{{ get_permalink($person->ID) }}">
  {!! get_the_post_thumbnail($person->ID, 'square', ['class' => ' !my-0 h-auto w-full rounded-full']) !!}
  <h3 class="!mb-1 !mt-2 !text-lg">{{ $person->post_title }}</h3>
  <div class="!text-base leading-none"> {{ carbon_get_post_meta($person->ID, 'role_title') }}</div>
</a>
