@if ($resource)
  <a href="{{ get_permalink($resource->ID) }}"
    class="wp-block not-prose group relative block overflow-hidden rounded bg-white font-normal !no-underline transition">
    <div
      class="flex flex-row items-center border-l-8 border-yellow border-opacity-75 bg-yellow bg-opacity-30 bg-clip-padding transition hover:bg-opacity-40 lg:border-l-[1.25rem]">
      {{-- <div
        class="clip-hex ml-6 hidden w-20 flex-none bg-yellow bg-opacity-70 transition group-hover:bg-opacity-100 md:block">
      </div> --}}
      <div class="flex-1 px-6 py-4">
        <div class="text-sm font-semibold leading-tight antialiased">Research, Policy &amp; Practice &gt;
        </div>

        <h3 class="mb-1 text-xl font-semibold !leading-tight">{{ $resource->post_title }}
        </h3>

        {{-- <span class="inline-block rounded-full bg-white px-4 py-1 text-sm">Access this resource</span> --}}

      </div>
      @include('partials.card-arrow', ['class' => 'group-hover:bg-yellow group-hover:bg-opacity-30'])
    </div>
  </a>
@endif
