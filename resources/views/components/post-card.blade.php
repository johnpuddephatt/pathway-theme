<a href="{{ get_permalink($post->ID) }}"
  class="group relative flex flex-row items-center rounded bg-beige bg-opacity-50 transition hover:bg-opacity-80">
  <div class="clip-hex mx-4 my-6 hidden w-20 flex-none bg-beige md:block lg:mx-8 lg:w-32 2xl:w-36">
    {!! get_the_post_thumbnail($post->ID, 'square', [
        'class' => ' h-full w-full object-cover',
    ]) !!}
  </div>
  <div class="flex flex-col items-start p-4 lg:pl-0">
    <div class="mb-1 mt-auto text-blue text-opacity-80">
      {{ get_the_date(null, $post->ID) }}
    </div>
    <h3 class="max-w-3xl text-lg font-semibold !leading-tight md:text-xl lg:text-2xl">{{ $post->post_title }}</h3>
    @if ($post->post_excerpt)
      <p class="mt-3 max-w-3xl">{!! $post->post_excerpt !!}</p>
    @endif

  </div>

  @include('partials.card-arrow', ['class' => 'group-hover:bg-beige'])

</a>
