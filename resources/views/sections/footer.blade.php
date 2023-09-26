<footer class="bg-blue pb-4 pt-24 text-white antialiased lg:pb-36">
  <div class="container flex max-w-none flex-col justify-between gap-16 lg:flex-row">
    @if (carbon_get_theme_option('newsletter_url'))
      <form action="{{ carbon_get_theme_option('newsletter_url') }}" method="POST">
        <h2 class="mb-6 max-w-sm text-2xl font-bold leading-tight md:text-3xl">{!! nl2br(carbon_get_theme_option('newsletter_title')) !!}</h2>
        <input
          class="rounded-full border-2 border-white border-opacity-80 bg-transparent py-1.5 pl-2 pr-12 focus:border-opacity-100 md:py-2.5 md:pl-4 lg:pl-8 lg:pr-20"
          type="email" placeholder="Enter your email address" />
        <button
          class="-ml-12 rounded-full border-2 border-white bg-blue px-4 py-1.5 font-semibold md:px-8 md:py-2.5 lg:px-10"
          type="submit">{{ carbon_get_theme_option('newsletter_button_text') }}</button>
      </form>
    @endif
    <div class="lg:ml-auto">
      <div class="flex flex-col gap-16 lg:flex-row">

        <div class="mt-2 flex flex-row items-start gap-2 lg:justify-end">
          @foreach (['facebook', 'twitter', 'youtube', 'instagram', 'linkedin', 'vimeo'] as $account)
            @if (carbon_get_theme_option($account))
              <a rel="noopener" class="inline-block rounded-full bg-white p-2 text-blue"
                aria-label="{{ $account }} link" href="{{ carbon_get_theme_option($account) }}" target="_blank">
                <x-dynamic-component :component="'icon.' . $account" class="mt-4" />
              </a>
            @endif
          @endforeach
        </div>
        @if ($secondaryNavigation)
          <div class="">
            <nav>
              <ul class="columns-2 gap-8 font-semibold">
                @foreach ($secondaryNavigation as $item)
                  <li>
                    <a class="inline-block" href="{{ $item->url }}">{{ $item->label }}</a>
                  </li>
                @endforeach
              </ul>
            </nav>
          </div>
        @endif

      </div>
      @if (carbon_get_theme_option('footer_text'))
        <p class="mt-12 text-sm text-white text-opacity-80">{!! nl2br(carbon_get_theme_option('footer_text')) !!}</p>
      @endif

    </div>

  </div>

</footer>
