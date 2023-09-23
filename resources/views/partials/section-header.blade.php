<div class="{{ $background_colour ?? 'bg-green' }} relative mb-24 flex flex-row items-center overflow-hidden">

  <svg class="absolute -left-16 top-1/2 w-3/5 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="988.81"
    height="992.23" viewBox="0 0 988.81 992.23">
    <path fill="#fff"
      d="M197.36 894.69a60.49 60.49 0 0 1-36.48-47.92l-30.92-239.31a60.48 60.48 0 0 1 23.24-55.72l191.76-146.48a60.55 60.55 0 0 1 59.83-7.76l193.48 80.65 143.36-109.5-23-177.81-165.5-69L91.67 474.29a57 57 0 0 1-79.95-10.71 57 57 0 0 1 10.7-79.95L508.49 12.37a60.45 60.45 0 0 1 59.9-7.72L791.1 97.47l.15.07a60.53 60.53 0 0 1 36.48 47.85l31 239.39a60.54 60.54 0 0 1-23.24 55.72L642.83 587.64a60.84 60.84 0 0 1-23.75 11 60 60 0 0 1-36.1-3.24l-193.46-80.65-142.49 108.83 23 177.81 165.49 69 461.63-352.6a57.041 57.041 0 0 1 69.25 90.66L480.13 979.86a60.55 60.55 0 0 1-59.83 7.76l-222.78-92.86Z"
      opacity=".075" />
  </svg>

  <div class="pointer-events-none absolute h-full w-1/3 bg-gradient-to-r from-green from-15% to-transparent"></div>

  <div class="container relative w-1/2 max-w-xl flex-none py-16">

    <h1 class="mb-8 max-w-sm font-serif text-6xl">{!! $title ?? get_the_title() !!}</h1>
    <div class="text-lg font-semibold">
      {!! $excerpt ?? get_the_excerpt() !!}
    </div>

  </div>

  <div class="w-1/2">
    {!! get_the_post_thumbnail($page_id ?? null, '3by2', [
        'class' => 'clip-hex-left w-full max-w-none flex-none block h-auto max-h-[30rem] object-cover',
    ]) !!}
  </div>
</div>
