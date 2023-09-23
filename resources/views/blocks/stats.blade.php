<div
  class="{{ $fields->background_colour ?? 'bg-beige' }} container mb-24 flex max-w-6xl items-center justify-between gap-8 p-16">
  <div class="relative">
    <h2 class="mb-8 max-w-lg font-serif text-5xl">{{ $fields->title }}</h2>
    <div class="max-w-md text-lg">
      {{ $fields->description }}
    </div>
    <x-buttons :buttons="$fields->buttons" :invert="$fields->background_colour == 'bg-yellow'" />
  </div>

  <div class="mx-auto grid grid-cols-2 gap-x-12 gap-y-8">
    @foreach ($fields->facts as $fact)
      <div class="text-center">
        <div class="clip-hex relative flex aspect-[0.9] items-center justify-center bg-white">
          <div class="text-4xl font-bold">{{ $fact['number'] }}</div>
        </div>
        <p class="mt-2 text-lg font-semibold">{{ $fact['text'] }}</p>
      </div>
    @endforeach
  </div>
</div>
