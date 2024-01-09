<div class="relative max-lg:bg-beige lg:mb-12 xl:mb-24">

  {!! wp_get_attachment_image($fields->image, '2by1', false, [
      'sizes' => '80vw',
      'class' =>
          'w-full max-lg:clip-hex-bottom lg:absolute max-lg:max-h-96 top-0 right-0  block lg:h-[85%]  lg:w-[calc((0.85*1536px)+((100vw-1536px)/2))] object-cover',
  ]) !!}
  <div class="container relative flex w-full flex-row items-center max-xl:max-w-none lg:h-[45vw] lg:max-h-[50rem]">

    <div class="absolute bottom-0 right-full top-0 hidden h-full w-[9999px] bg-beige bg-opacity-95 lg:block"></div>
    <div class="lg:clip-hex-right absolute left-0 top-0 h-full w-full bg-beige bg-opacity-95 lg:w-[45%]"></div>
    <div class="relative pb-12 pt-4 lg:w-[45%] lg:py-12">
      <h1 class="mb-4 max-w-sm font-serif text-5xl lg:mb-8 lg:mt-6 2xl:max-w-md 2xl:text-6xl">{{ $fields->title }}</h1>
      <div class="relative max-w-md text-lg font-semibold 2xl:text-2xl">
        {{ $fields->description }}
      </div>

      <x-buttons :buttons="$fields->buttons" />

    </div>
  </div>
</div>
