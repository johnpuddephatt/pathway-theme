<div class="relative mb-24">

  {!! wp_get_attachment_image($fields->image, '2by1', false, [
      'class' => 'absolute top-0 right-0  block h-[85%]  w-[calc((0.85*1536px)+((100vw-1536px)/2))] object-cover',
  ]) !!}
  <div class="container relative flex h-[45vw] max-h-[50rem] w-full flex-row items-center">

    <div class="bg-beige absolute bottom-0 right-full top-0 h-full w-[9999px] bg-opacity-95"></div>
    <div class="clip-hex-right bg-beige absolute left-0 top-0 h-full w-[45%] bg-opacity-95"></div>
    <div class="relative w-[45%] py-12">
      <h1 class="mb-8 max-w-sm font-serif text-5xl">{{ $fields->title }}</h1>
      <div class="max-w-md text-lg font-semibold">
        {{ $fields->description }}
      </div>

      <x-buttons :buttons="$fields->buttons" />

    </div>
  </div>
</div>
