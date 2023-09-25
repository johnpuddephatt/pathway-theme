<header>
  @if ($secondaryNavigation)
    <div class="hidden border-b border-blue border-opacity-25 pb-3 pt-4 lg:block">
      <div class="container max-w-none">
        <nav>
          <ul class="flex flex-row items-center justify-end gap-8 font-semibold">
            @foreach ($secondaryNavigation as $item)
              <li>
                <a class="{{ carbon_get_nav_menu_item_meta($item->id, 'crb_is_button') ? 'border-2 border-yellow rounded-full px-4 py-1' : ' ' }} inline-block text-blue text-opacity-70"
                  href="{{ $item->url }}">{!! $item->label !!}</a>
              </li>
            @endforeach
          </ul>
        </nav>
      </div>
    </div>
  @endif
  <div class="">
    <div class="container flex max-w-none items-center justify-center lg:justify-between">
      <a class="font-heading flex flex-row items-center gap-1.5 py-3 text-2xl font-bold tracking-tight lg:py-6 lg:text-3xl"
        href="{{ home_url('/') }}">
        <svg class="h-10 w-10 text-green lg:h-12 lg:w-12" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 62.39 61.89 "width="62.39" height="61.89">
          <path fill="currentColor"
            d="M23.52 61.89a3.88 3.88 0 0 1-3.35-1.93L12.4 46.55a3.88 3.88 0 0 1 0-3.87l7.71-13.43a3.91 3.91 0 0 1 3.35-1.94H36.9l5.77-10-5.78-10h-11.5L6.84 39.61a3.64 3.64 0 0 1-5 1.35 3.65 3.65 0 0 1-1.35-5l19.54-34A3.88 3.88 0 0 1 23.38.02h15.48a3.87 3.87 0 0 1 3.34 1.92l7.78 13.39a3.9 3.9 0 0 1 0 3.88l-7.74 13.48a3.84 3.84 0 0 1-1.13 1.24 3.82 3.82 0 0 1-2.22.7H25.45l-5.73 10 5.77 10h11.5l18.56-32.31a3.66 3.66 0 0 1 5-1.35 3.66 3.66 0 0 1 1.35 5l-19.55 34A3.87 3.87 0 0 1 39 61.91H23.52Zm0-7.32ZM38.89 7.31Z" />
        </svg>

        {!! $siteName !!}
      </a>
      <button @click="menuOpen = true" :class="{ 'hidden': menuOpen }" class="lg:hidden"
        aria-label="Open navigation menu" title="Open navigation menu"><svg xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="absolute right-4 top-2 h-12 w-12 rounded-full bg-white bg-opacity-10 p-2 transition hover:bg-opacity-100 hover:text-black">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>

      <button @click="menuOpen = false" :class="{ 'hidden': !menuOpen }" class="lg:hidden"
        aria-label="Close navigation menu" title="Close navigation menu"><svg xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="absolute right-4 top-2 h-12 w-12 rounded-full bg-white bg-opacity-10 p-2 transition hover:bg-opacity-100 hover:text-black">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      @if ($primaryNavigation)

        <nav x-cloak :class="{ 'max-lg:translate-x-full': !menuOpen }"
          class="flex flex-col justify-center overflow-y-auto transition max-lg:fixed max-lg:inset-0 max-lg:top-16 max-lg:z-20 max-lg:h-full max-lg:w-full max-lg:bg-green max-lg:py-36 max-lg:text-white">

          <ul class="flex flex-col gap-4 max-lg:container lg:flex-row lg:gap-12">
            @foreach ($primaryNavigation as $item)
              <li>
                <a class="inline-block text-lg font-semibold max-lg:text-2xl lg:py-2"
                  href="{{ $item->url }}">{!! $item->label !!}</a>
              </li>
            @endforeach
          </ul>

          @if ($secondaryNavigation)
            <nav class="container mt-12 lg:hidden">
              <ul class="flex flex-col gap-2 text-lg font-semibold text-white">
                @foreach ($secondaryNavigation as $item)
                  <li>
                    <a class="{{ carbon_get_nav_menu_item_meta($item->id, 'crb_is_button') ? ' bg-yellow text-blue rounded-full px-8 mt-8 py-1' : ' ' }} inline-block"
                      href="{{ $item->url }}">{!! $item->label !!}</a>
                  </li>
                @endforeach
              </ul>
            </nav>
          @endif
        </nav>
      @endif
    </div>
  </div>
</header>
