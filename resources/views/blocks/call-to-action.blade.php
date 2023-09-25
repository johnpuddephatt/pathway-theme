<div class="lg:container lg:mb-24">

  <div
    class="{{ $fields->background_colour ?? 'bg-yellow' }} {{ $fields->reverse ? 'lg:flex-row-reverse' : 'lg:flex-row' }} flex flex-col items-center justify-between rounded">

    <div class="pb- relative mx-auto pt-16 font-bold max-lg:container md:pb-0 lg:w-3/5 lg:p-16">

      <h2 class="relative mb-6 max-w-lg pt-6 font-serif text-4xl font-normal md:text-6xl">{{ $fields->title }}
      </h2>

      <x-buttons :buttons="$fields->buttons" :invert="true" />

    </div>

    <div
      class="{{ $fields->reverse ? 'lg:-ml-12' : 'lg:-mr-12' }} relative ml-auto md:-mt-16 md:w-1/2 lg:mt-0 lg:w-2/5 lg:py-8">
      {!! wp_get_attachment_image($fields->image, 'square', false, [
          'class' => ' block w-full max-w-none clip-hex-top ',
      ]) !!}

    </div>
  </div>
</div>
