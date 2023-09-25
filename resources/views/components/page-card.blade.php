<div
  class="group relative flex flex-row items-center overflow-hidden rounded bg-beige bg-opacity-70 text-center hover:bg-opacity-80 md:block md:gap-4">
  <div
    class="max-md:clip-hex md:clip-hex-bottom flex-none bg-green bg-opacity-40 max-md:m-6 max-md:w-20 md:w-full lg:aspect-[1.5]">
    {!! get_the_post_thumbnail($page->ID, '3by2', ['class' => ' block h-auto w-full']) !!}
  </div>
  <div class="py-6 md:pb-8 md:pt-4">
    <h3 class="text-2xl font-bold">{{ $page->post_title }}</h3>
    <a href="{{ get_permalink($page->ID) }}}"
      class="mt-6 hidden rounded-full bg-blue bg-opacity-70 px-6 py-2 font-semibold !text-white !no-underline transition before:absolute before:inset-0 hover:bg-opacity-100 md:inline-block">Read
      More</a>
  </div>

  @include('partials.card-arrow', ['class' => ' md:hidden group-hover:bg-beige'])
</div>
