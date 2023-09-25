<div class="container my-12 max-md:pt-8 lg:mb-12 xl:mb-24 xl:mt-12">
  <div
    class="{{ $fields->reverse ? 'md:flex-row-reverse' : 'md:flex-row' }} {{ $fields->background_colour ?? '' }} {{ $fields->background_colour ? 'max-md:px-6' : null }} flex flex-col items-start rounded max-md:gap-4 lg:items-center">
    {!! wp_get_attachment_image($fields->image, '3by2', false, [
        'class' => '-mt-8 md:mt-0 max-md:clip-hex  w-20 max-md:aspect-[2] rounded block md:w-1/2',
    ]) !!}

    <div
      class="{{ $fields->background_colour ? 'md:px-6 md:pt-10 pb-6 ' : 'md:px-6' }} relative md:w-1/2 lg:p-8 xl:p-12 2xl:p-20">
      <h2 class="mb-4 font-serif text-3xl font-normal md:text-4xl lg:mb-8 lg:text-5xl">{{ $fields->title }}</h2>
      <div class="max-w-md text-lg">
        {{ $fields->description }}
      </div>

      <x-buttons :buttons="$fields->buttons" :invert="$fields->background_colour == 'bg-yellow'" />

    </div>
  </div>
</div>
