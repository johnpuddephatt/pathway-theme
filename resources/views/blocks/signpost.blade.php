<div class="container mb-24 mt-12">
  <div
    class="{{ $fields->reverse ? 'flex-row-reverse' : 'flex-row' }} {{ $fields->background_colour ?? '' }} flex items-center gap-8 overflow-hidden rounded">
    {!! wp_get_attachment_image($fields->image, '3by2', false, ['class' => 'rounded block w-1/2']) !!}

    <div class="{{ $fields->reverse ? 'pr-6' : 'pl-6' }} relative w-1/2 p-12">
      <h2 class="mb-8 font-serif text-5xl font-normal">{{ $fields->title }}</h2>
      <div class="max-w-md text-lg">
        {{ $fields->description }}
      </div>

      <x-buttons :buttons="$fields->buttons" :invert="$fields->background_colour == 'bg-yellow'" />

    </div>
  </div>
</div>
