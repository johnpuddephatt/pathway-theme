<div class="relative flex flex-row items-center gap-12 bg-beige bg-opacity-50 p-8">
  {!! get_the_post_thumbnail($post->ID, '3by2', ['class' => 'clip-hex block h-auto w-36']) !!}
  <div class="px-6 pb-8 pt-4">
    <div class="mb-1 text-lg font-bold">
      {{ get_the_date(null, $post->ID) }}
    </div>
    <h3 class="mb-8 text-2xl font-bold">{{ $post->post_title }}</h3>

    <a href="{{ get_permalink($post->ID) }}"
      class="rounded-full bg-blue bg-opacity-70 px-6 py-2 font-semibold text-white transition before:absolute before:inset-0 hover:bg-opacity-100">Read
      More</a>
  </div>

  <svg class="ml-auto w-20" xmlns="http://www.w3.org/2000/svg" width="99.87" height="134.55" viewBox="0 0 99.87 134.55">
    <path fill="#fff"
      d="M30.85 61.98a10.76 10.76 0 0 1 .36 10.75L4.87 122.52a8.19 8.19 0 0 0 7.52 12l46.49-1.59a11.37 11.37 0 0 0 9.63-6l30.13-56.52a10.78 10.78 0 0 0-.37-10.75L64.37 5.34a11.38 11.38 0 0 0-10-5.34L7.97 1.6a8.18 8.18 0 0 0-6.68 12.49Z" />
  </svg>

</div>
