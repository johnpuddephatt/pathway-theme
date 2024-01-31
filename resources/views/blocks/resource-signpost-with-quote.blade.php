@if (isset($fields->quote))
  <div class="wp-block not-prose relative my-8 overflow-hidden rounded border border-beige bg-beige px-12 pt-8 lg:mb-24">
    <svg class="`rotate-12 absolute -right-12 top-1/2 h-auto w-full max-w-none -translate-y-1/2 md:w-3/4"
      xmlns="http://www.w3.org/2000/svg" width="1047.58" height="1050" viewBox="0 0 1047.58 1050">
      <path fill="#fff"
        d="M98.71 874.01a66.61 66.61 0 0 1-25-62l37.57-267.6a69.13 69.13 0 0 1 41.38-53.86l248.9-105.32a66.67 66.67 0 0 1 66.44 8.21l183.61 141 186.07-78.73 27.88-198.85-157.06-120.6-598.88 253.4c-32.49 13.74-69.45-1.39-82.56-33.78s2.62-69.82 35.11-83.57L693.04 5.37a66.61 66.61 0 0 1 66.51 8.26l211.36 162.3.14.11a66.61 66.61 0 0 1 25 61.92l-37.54 267.71a69.22 69.22 0 0 1-41.38 53.86l-250 105.79a67.92 67.92 0 0 1-28.71 5.31 65.39 65.39 0 0 1-37.75-13.53l-183.59-141-184.94 78.25-27.88 198.85 157.06 120.6 599.14-253.51c32.49-13.75 69.46 1.37 82.56 33.78s-2.62 69.82-35.11 83.57l-631.2 267.04a66.65 66.65 0 0 1-66.43-8.21L98.85 874.12ZM.05 834.34H0Zm715.7-494.63Z"
        opacity=".3" />
    </svg>
    <div
      class="pointer-events-none absolute bottom-0 left-1/4 top-0 h-full w-[50%] bg-gradient-to-r from-beige from-15% to-transparent">
    </div>
    <div class="flex flex-col pb-4 lg:flex-row lg:items-center">
      <div class="relative flex flex-1 flex-col items-start justify-start lg:mx-auto lg:w-2/3">
        <h2 class="text-balance relative mt-2 max-w-lg pb-4 pt-8 font-serif text-2xl md:text-3xl lg:pr-0">
          <span
            class="block align-bottom font-[math] text-8xl !leading-[0.1px] text-white md:-ml-[2.5rem] md:pr-0 lg:text-8xl">“</span>{{ $fields->quote }}<span
            class="absolute -bottom-4 left-full -ml-8 align-bottom font-[math] text-8xl !leading-[0.1px] text-white lg:ml-0 lg:text-8xl">”</span>
        </h2>
        @if (isset($fields->citation))
          <div class="max-w-sm text-lg lg:max-w-lg">
            {{ $fields->citation }}
          </div>
        @endif

      </div>

      @if ($fields->image)
        <div class="relative w-1/2 flex-none pl-12 max-lg:left-1/2 lg:w-1/3">
          {!! wp_get_attachment_image($fields->image, 'thumbnail', false, [
              'class' => 'block w-full clip-hex h-auto  object-cover',
              'sizes' => '30vw',
          ]) !!}

          {{-- <svg xmlns="http://www.w3.org/2000/svg"
          class="pointer-events-none absolute left-[60%] top-0 h-[170%] w-auto -translate-y-[29%] opacity-30"
          width="417.29" height="1135.45" viewBox="0 0 417.29 1135.45">
          <path fill="#fff"
            d="M236.19 7.38a55.09 55.09 0 0 0-55.09 0L71 70.94 24.08 98.03A48.18 48.18 0 0 0 0 139.75v181.31a55.1 55.1 0 0 0 27.55 47.71l157 90.65a48.19 48.19 0 0 0 48.17 0l157-90.65a55.11 55.11 0 0 0 27.57-47.71V143.74a55.1 55.1 0 0 0-27.54-47.71ZM196.21 880.49a30.59 30.59 0 0 0-30.63 0l-61.23 35.34-26.06 15.07a26.79 26.79 0 0 0-13.39 23.19v100.83a30.64 30.64 0 0 0 15.32 26.53l87.31 50.41a26.77 26.77 0 0 0 26.79 0l87.31-50.41a30.64 30.64 0 0 0 15.32-26.53v-98.6a30.62 30.62 0 0 0-15.32-26.53Z"
            class="prefix__cls-1" />
        </svg> --}}
        </div>
      @endif
    </div>

    @include('blocks.resource-signpost')

  </div>
@endif
