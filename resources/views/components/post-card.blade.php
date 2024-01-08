<div class="group relative flex flex-row items-center rounded bg-beige bg-opacity-50 transition hover:bg-opacity-80">
  <div class="clip-hex mx-4 my-6 hidden w-20 bg-beige md:block lg:mx-8 lg:w-36">
    {!! get_the_post_thumbnail($post->ID, 'square', [
        'class' => ' h-full w-full object-cover',
    ]) !!}
  </div>
  <div class="flex flex-col items-start p-4 lg:pl-0">
    <div class="mb-2 mt-auto font-semibold">
      {{ get_the_date(null, $post->ID) }}
    </div>
    <h3 class="max-w-3xl text-lg font-semibold !leading-tight md:text-xl lg:text-2xl">{{ $post->post_title }}</h3>
    @if ($post->post_excerpt)
      <p class="mt-6 max-w-3xl">{!! $post->post_excerpt !!}</p>
    @endif

    {{-- <a href="{{ get_permalink($post->ID) }}"
      class="mt-auto rounded-full bg-blue bg-opacity-80 px-6 py-2 text-sm font-semibold text-white transition duration-300 before:absolute before:inset-0 hover:bg-opacity-100 max-md:h-0 max-md:!p-0 max-md:opacity-0 md:inline-block">
      Read More</a> --}}
  </div>

  @include('partials.card-arrow', ['class' => 'group-hover:bg-beige'])

</div>
