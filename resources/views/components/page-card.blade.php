<div class="relative overflow-hidden rounded bg-beige text-center">
  <div class="clip-hex-bottom aspect-[1.5] bg-green bg-opacity-40">
    {!! get_the_post_thumbnail($page->ID, '3by2', ['class' => ' block h-auto w-full']) !!}
  </div>
  <div class="px-6 pb-8 pt-4">
    <h3 class="mb-6 text-2xl font-bold">{{ $page->post_title }}</h3>
    <a href="{{ get_permalink($page->ID) }}}"
      class="rounded-full bg-blue bg-opacity-70 px-6 py-2 font-semibold !text-white !no-underline transition before:absolute before:inset-0 hover:bg-opacity-100">Read
      More</a>
  </div>
</div>
