  @include('partials.issue-header')

  <article
    @php(post_class())>
    <div class="container mx-auto pb-32">
      <div class="flex flex-col gap-16 lg:flex-row-reverse">
        <div class="bg-opactity-30 flex-none bg-beige p-6 lg:ml-auto lg:w-80 lg:bg-white lg:p-0">
          <div class="sticky top-16 mx-auto lg:mt-48">
            {!! $toc !!}
            @if (count($resources))
            <a class="leading-tight text-opacity-70 text-blue" href="#resources">Resources</a>
            @endif
          </div>
        </div>
        <div class="lg:px-0">
          <div class="post-content">
            {!! $content !!}
          </div>

        </div>
      </div>


    </div>

         @if (count($resources))
     <div class="py-16 bg-beige bg-opacity-50" id="resources">
     <div class="container">
          <h2 class="mb-8 wp-block-heading relative" >{{ $title }} resources <a href="#resources"
              class="opacity-0 transition before:absolute before:inset-0 group-hover:opacity-70"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
                class="inline-block h-6 w-6" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                  d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244">
                </path>
              </svg></a>
          </h2>

          <div class="flex flex-col gap-6">
            @foreach ($resources as $resource)
            <x-resource-card :resource="$resource" />
            @endforeach
          </div>
          </div>
          </div>
        @endif
    </article>
