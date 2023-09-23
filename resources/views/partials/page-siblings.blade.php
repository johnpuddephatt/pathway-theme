@if ($siblings)
  <div class="border-blue border-t border-opacity-25">
    <div class="container mx-auto py-16 xl:max-w-5xl">
      <h3 class="text-blue pb-8 text-xl font-semibold">More pages in this section</h3>
      @foreach ($siblings as $page)
        <a class="text-blue mb-4 mt-2 flex items-center text-lg" href="{{ get_permalink($page->ID) }}">
          <hr class="border-blue mr-4 inline-block w-6 border border-b-0 border-opacity-25">
          {!! get_the_title($page->ID) !!}
        </a>
      @endforeach
    </div>
  </div>
@endif
