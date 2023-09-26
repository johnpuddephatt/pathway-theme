<div
  class="{{ $fields->background_colour ?? 'bg-beige' }} relative mb-8 overflow-hidden rounded py-16 lg:container md:p-16 lg:mb-24 lg:max-w-6xl">

  <svg class="absolute -right-8 top-1/2 h-auto w-[150%] md:right-1/3 md:w-full md:-translate-y-1/2"
    xmlns="http://www.w3.org/2000/svg" width="988.81" height="992.23" viewBox="0 0 988.81 992.23">
    <path fill="#fff"
      d="M197.36 894.69a60.49 60.49 0 0 1-36.48-47.92l-30.92-239.31a60.48 60.48 0 0 1 23.24-55.72l191.76-146.48a60.55 60.55 0 0 1 59.83-7.76l193.48 80.65 143.36-109.5-23-177.81-165.5-69L91.67 474.29a57 57 0 0 1-79.95-10.71 57 57 0 0 1 10.7-79.95L508.49 12.37a60.45 60.45 0 0 1 59.9-7.72L791.1 97.47l.15.07a60.53 60.53 0 0 1 36.48 47.85l31 239.39a60.54 60.54 0 0 1-23.24 55.72L642.83 587.64a60.84 60.84 0 0 1-23.75 11 60 60 0 0 1-36.1-3.24l-193.46-80.65-142.49 108.83 23 177.81 165.49 69 461.63-352.6a57.041 57.041 0 0 1 69.25 90.66L480.13 979.86a60.55 60.55 0 0 1-59.83 7.76l-222.78-92.86Z"
      opacity=".1" />
  </svg>

  <div class="container flex flex-col justify-between gap-12 lg:flex-row lg:items-center">

    <div class="relative">
      <h2 class="mb-6 max-w-lg font-serif text-4xl !leading-none md:text-5xl lg:mb-8">{{ $fields->title }}</h2>
      <div class="max-w-md text-lg">
        {{ $fields->description }}
      </div>
      <x-buttons :buttons="$fields->buttons" :invert="$fields->background_colour == 'bg-yellow' || $fields->background_colour == 'bg-pink'" />
    </div>

    <div
      class="grid flex-none grid-cols-1 gap-4 md:mx-auto md:grid-cols-4 md:gap-8 lg:w-1/3 lg:max-w-none lg:grid-cols-2 lg:gap-x-12 lg:gap-y-8">
      @foreach ($fields->facts as $fact)
        <div class="flex items-center gap-2 md:block md:text-center">
          <div
            class="clip-hex relative flex aspect-[0.9] w-16 flex-none items-center justify-center bg-white md:w-full">
            <div class="text-3xl font-bold md:text-5xl">{{ $fact['number'] }}</div>
          </div>
          <p class="mt-2 font-semibold !leading-tight lg:text-lg">{{ $fact['text'] }}</p>
        </div>
      @endforeach
    </div>

  </div>
</div>
