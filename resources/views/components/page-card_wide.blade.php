<a href="{{ get_permalink($page->ID) }}"
  class="relative flex flex-row items-center bg-beige bg-opacity-70 !no-underline transition hover:bg-opacity-100">
  <div class="clip-hex !my-4 !ml-5 !mr-5 h-20 w-20 bg-white bg-opacity-80">
    {!! get_the_post_thumbnail($page->ID, 'square', ['class' => '!my-0 block h-auto w-20']) !!}
  </div>
  <div class="">
    <h3 class="!my-0 p-6 pl-0 !text-xl font-bold">{{ $page->post_title }}</h3>
  </div>
  <div class="fle-row ml-auto flex items-center self-stretch border-l border-white px-6 py-2">
    <svg class="h-auto w-12" xmlns="http://www.w3.org/2000/svg" width="99.87" height="134.55" viewBox="0 0 99.87 134.55">
      <path fill="#fff"
        d="M30.85 61.98a10.76 10.76 0 0 1 .36 10.75L4.87 122.52a8.19 8.19 0 0 0 7.52 12l46.49-1.59a11.37 11.37 0 0 0 9.63-6l30.13-56.52a10.78 10.78 0 0 0-.37-10.75L64.37 5.34a11.38 11.38 0 0 0-10-5.34L7.97 1.6a8.18 8.18 0 0 0-6.68 12.49Z" />
    </svg>
  </div>
</a>
