<div class="container mb-24">

  <div
    class="{{ $fields->background_colour ?? 'bg-yellow' }} {{ $fields->reverse ? 'flex-row-reverse' : 'flex-row' }} flex items-center justify-between rounded">

    <div class="relative mx-auto w-3/5 p-16 font-bold">

      <h2 class="relative mb-6 max-w-lg pt-6 font-serif text-6xl font-normal">{{ $fields->title }}
      </h2>

      <x-buttons :buttons="$fields->buttons" :invert="true" />

    </div>

    <div class="{{ $fields->reverse ? '-ml-12' : '-mr-12' }} relative w-2/5 py-8">
      {!! wp_get_attachment_image($fields->image, 'square', false, [
          'class' => ' block w-full max-w-none clip-hex-top ',
      ]) !!}

    </div>
  </div>
</div>
