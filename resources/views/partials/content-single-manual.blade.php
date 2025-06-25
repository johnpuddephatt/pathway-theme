@if (!$post->post_parent)
  @if ($_GET['access_denied'] ?? false)
    <div id="access-denied-modal" class="relative z-10" aria-labelledby="dialog-title" role="dialog" aria-modal="true">

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div onclick="document.getElementById('access-denied-modal').classList.add('hidden')"
          class="flex min-h-full items-end justify-center bg-black/25 p-4 text-center sm:items-center sm:p-0">

          <div
            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div
                  class="size-12 bg-red-100 sm:size-10 mx-auto flex shrink-0 items-center justify-center rounded-full sm:mx-0">
                  <svg class="size-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-gray-900 text-base font-semibold" id="dialog-title">Access denied</h3>
                  <div class="mt-2">
                    <p class="text-gray-500 text-sm">Sorry, you do not have access to this page.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">

              <button type="button" onclick="document.getElementById('access-denied-modal').classList.add('hidden')"
                class="shadow-xs hover:bg-gray-50 mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-blue sm:mt-0 sm:w-auto">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  @include('partials.section-header', ['background_colour' => 'bg-blue text-white'])

  @php
    
    $user_access = carbon_get_user_meta(get_current_user_id(), 'access_control');
    $manual_access = carbon_get_post_meta(get_the_ID(), 'access_control');
    
    if (!$manual_access) {
        $has_access = true;
    } elseif (is_array($manual_access) && is_array($user_access)) {
        $has_access = count(array_intersect($manual_access, $user_access)) > 0;
    } else {
        $has_access = false;
    }
    
  @endphp

  @if (!$has_access)
    <div class="container prose mx-auto pb-8 pt-12">
      {!! the_content() !!}
    </div>
  @else
    <div class="container mx-auto pb-8">
      <ul class="manual-list">
        {!! wp_list_pages([
            'post_type' => 'manual',
            'title_li' => null,
            'depth' => 2,
            'echo' => false,
            'child_of' => $post->ID,
            'sort_column' => 'menu_order',
        ]) !!}
      </ul>
    </div>
  @endif
@else
  <article @php(post_class())>

    <div class="flex min-h-screen w-full flex-row border-t border-blue border-opacity-25">

      @include('partials.page-sidebar')
      <div class="flex-1 pt-12">
        @include('partials.page-header')
        <div class="container mx-auto pb-32 xl:max-w-5xl 2xl:max-w-6xl">
          <div class="flex flex-col gap-12 lg:flex-row-reverse">
            <div class="max-w-screen-sm max-lg:bg-beige max-lg:p-4 max-sm:-mx-4 lg:w-48">
              <div class="top-16 mx-auto lg:sticky">

                {!! $toc !!}
              </div>
            </div>
            <div class="flex-1 lg:px-0">
              <div class="page-content prose xl:prose-lg" id="overview">

                {!! $content !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
@endif
