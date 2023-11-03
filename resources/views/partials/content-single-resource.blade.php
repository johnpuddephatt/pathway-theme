@include('partials.resource-header')

<div class="container py-16">
  <div class="post-content">
    {{ the_content() }}
  </div>
</div>

@if (count($file_uploads) || count($external_links) || $file_oembed)
  <div class="bg-beige bg-opacity-50 pb-16 pt-4">
    <div class="container">

      @if ($file_oembed && isset($file_oembed->html))
        <h2 class="mb-8 mt-12 text-3xl font-bold">Media</h2>
        <div class="max-w-4xl">
          <div style="padding-top: {{ ($file_oembed->height / $file_oembed->width) * 100 }}%;"
            class="embedded-iframe relative">
            {!! $file_oembed->html !!}

          </div>
        </div>
      @endif

      @if (count($file_uploads))

        <h2 class="mb-8 mt-12 text-3xl font-bold">Downloads</h2>

        <div class="flex flex-col gap-4">

          @foreach ($file_uploads as $file_upload)
            <a download href="{{ get_permalink($file_upload->ID) }}"
              class="group flex max-w-4xl flex-row items-center gap-2 rounded bg-white p-4 lg:p-8">
              <div>
                <h3 class="text-xl font-semibold leading-tight">{{ $file_upload->post_title }}</h3>

                @php($file_type_array = explode('.', $file_upload->guid));
                <div class="mt-2 flex flex-row gap-3">
                  <div class="uppercase">{{ end($file_type_array) }}</div>

                  {{ number_format(filesize(get_attached_file($file_upload->ID)) / 1000000, 1) }}MB

                </div>
              </div>

              <div
                class="ml-auto flex-none rounded-full bg-green bg-opacity-70 p-3.5 transition group-hover:bg-opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
                  class="ml-auto h-8 w-8 text-white" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44z" />
                </svg>

              </div>
            </a>
          @endforeach
        </div>
      @endif

      @if (count($external_links))

        <h2 class="mb-8 mt-12 text-3xl font-bold">Links</h2>

        <div class="flex max-w-4xl flex-col gap-4">
          @foreach ($external_links as $external_link)
            <a target="_blank" href="{{ $external_link['link'] }}"
              class="group flex max-w-4xl flex-row items-center gap-2 rounded bg-white p-4 lg:p-8">
              <div>
                <h3 class="text-xl font-semibold leading-tight">{{ $external_link['label'] }}</h3>

              </div>
              <div
                class="ml-auto flex-none rounded-full bg-green bg-opacity-70 p-3.5 transition group-hover:bg-opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
                  class="ml-auto h-8 w-8 text-white" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>

              </div>

            </a>
          @endforeach
        </div>
      @endif
    </div>
  </div>
@endif

@if (count($related_resources))
  <div class="container my-16">
    <h2 class="mb-8 text-3xl font-semibold">Related resources</h2>

    <div class="flex flex-col gap-4">
      @foreach ($related_resources as $resource)
        <x-resource-card :resource="$resource" />
      @endforeach
    </div>
  </div>
@endif
