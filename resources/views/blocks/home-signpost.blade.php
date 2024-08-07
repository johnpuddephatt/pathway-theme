@if ($fields->enabled)
  <a href="{{ $fields->url ?? '' }}"
    class="{{ $fields->background_colour ?? 'bg-green' }} group relative mb-8 block overflow-hidden lg:mb-24">
    <svg class="absolute -right-12 top-1/2 h-auto w-full max-w-none -translate-y-1/2 md:w-3/5"
      xmlns="http://www.w3.org/2000/svg" width="1047.58" height="1050" viewBox="0 0 1047.58 1050">
      <path fill="#fff"
        d="M98.71 874.01a66.61 66.61 0 0 1-25-62l37.57-267.6a69.13 69.13 0 0 1 41.38-53.86l248.9-105.32a66.67 66.67 0 0 1 66.44 8.21l183.61 141 186.07-78.73 27.88-198.85-157.06-120.6-598.88 253.4c-32.49 13.74-69.45-1.39-82.56-33.78s2.62-69.82 35.11-83.57L693.04 5.37a66.61 66.61 0 0 1 66.51 8.26l211.36 162.3.14.11a66.61 66.61 0 0 1 25 61.92l-37.54 267.71a69.22 69.22 0 0 1-41.38 53.86l-250 105.79a67.92 67.92 0 0 1-28.71 5.31 65.39 65.39 0 0 1-37.75-13.53l-183.59-141-184.94 78.25-27.88 198.85 157.06 120.6 599.14-253.51c32.49-13.75 69.46 1.37 82.56 33.78s-2.62 69.82-35.11 83.57l-631.2 267.04a66.65 66.65 0 0 1-66.43-8.21L98.85 874.12ZM.05 834.34H0Zm715.7-494.63Z"
        opacity=".1" />
    </svg>
    <div class="container flex flex-row gap-8 lg:items-center">
      <div class="relative w-48 py-8 pl-12 max-lg:hidden">
        {!! wp_get_attachment_image($fields->image, 'thumbnail', false, [
            'class' => 'block w-full clip-hex h-auto  object-cover',
            'sizes' => '30vw',
        ]) !!}

        <svg xmlns="http://www.w3.org/2000/svg"
          class="pointer-events-none absolute left-[60%] top-0 h-[170%] w-auto -translate-y-[29%]" width="417.29"
          height="1135.45" viewBox="0 0 417.29 1135.45">
          <path fill="#fff"
            d="M236.19 7.38a55.09 55.09 0 0 0-55.09 0L71 70.94 24.08 98.03A48.18 48.18 0 0 0 0 139.75v181.31a55.1 55.1 0 0 0 27.55 47.71l157 90.65a48.19 48.19 0 0 0 48.17 0l157-90.65a55.11 55.11 0 0 0 27.57-47.71V143.74a55.1 55.1 0 0 0-27.54-47.71ZM196.21 880.49a30.59 30.59 0 0 0-30.63 0l-61.23 35.34-26.06 15.07a26.79 26.79 0 0 0-13.39 23.19v100.83a30.64 30.64 0 0 0 15.32 26.53l87.31 50.41a26.77 26.77 0 0 0 26.79 0l87.31-50.41a30.64 30.64 0 0 0 15.32-26.53v-98.6a30.62 30.62 0 0 0-15.32-26.53Z"
            class="prefix__cls-1" />
        </svg>
      </div>
      <div>
        @if (isset($fields->pre_title))
          <div class="-mb-5 max-w-3xl text-xl font-semibold">{{ $fields->pre_title }}</div>
        @endif
        <h2 class="text-balance relative mb-6 mt-6 max-w-3xl pr-4 font-serif text-3xl md:text-4xl lg:pr-0">
          {{ $fields->title }}
        </h2>
        @if (isset($fields->post_title))
          <div class="-mt-3 max-w-3xl">{{ $fields->post_title }}</div>
        @endif
      </div>

      @include('partials.card-arrow', [
          'class' => 'bg-white bg-opacity-20 border-l-2 border-r-2 border-white group-hover:bg-opacity-50',
      ])

    </div>
  </a>
@endif
