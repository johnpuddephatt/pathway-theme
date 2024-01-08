<div class="group relative flex flex-row items-center rounded bg-beige bg-opacity-50 transition hover:bg-opacity-80">
  <div class="clip-hex mx-4 my-6 hidden w-20 bg-blue bg-opacity-20 md:block lg:mx-8 lg:w-36">
    {!! get_the_post_thumbnail($post->ID, 'square', [
        'class' => ' h-auto w-full object-cover',
    ]) !!}
  </div>
  <div class="flex flex-col items-start p-4 lg:pl-0">

    <h3 class="max-w-3xl text-lg font-semibold !leading-tight md:text-xl">{{ $post->post_title }}</h3>
    <div class="mt-auto md:mb-3 md:mt-1 md:text-lg">
      {{ get_the_date(null, $post->ID) }}
    </div>
    <a href="{{ get_permalink($post->ID) }}"
      class="mt-auto rounded-full bg-blue bg-opacity-80 px-6 py-2 text-sm font-semibold text-white transition duration-300 before:absolute before:inset-0 hover:bg-opacity-100 max-md:h-0 max-md:!p-0 max-md:opacity-0 md:inline-block">
      Read More</a>
  </div>

  @include('partials.card-arrow', ['class' => 'group-hover:bg-beige'])

</div>
