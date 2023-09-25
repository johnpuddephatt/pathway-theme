<div class="wp-block {{ defined('REST_REQUEST') && REST_REQUEST ? 'pointer-events-none' : null }} mt-8"
  id="press-releases">

  <form id="resources" class="border-b border-beige border-opacity-80" role="search" action="" method="get">
    <div class="flex flex-wrap gap-4 py-6 lg:flex-nowrap">
      <input aria-label="Text to search for" type="text" name="search" placeholder="Search releases by title"
        value="{{ $_GET['search'] ?? '' }}"
        class="max-w-sm flex-1 appearance-none rounded-full border-2 border-beige px-4 py-2 pr-8 text-lg lg:w-full lg:px-6" />

      <div class="-ml-14 rounded-full bg-white lg:mr-8">
        <input
          class="inline-flex appearance-none rounded-full border-2 border-yellow bg-yellow bg-opacity-90 px-6 py-2 text-center text-lg transition hover:bg-opacity-100"
          type="submit" alt="Search" value="Search" />
      </div>

      <div class="relative ml-auto">
        <select onchange="this.form.submit()"
          class="max-w-xs flex-shrink appearance-none rounded-full border border-beige px-6 py-2 pr-12 text-lg"
          name="order">
          <option default {{ ($_GET['order'] ?? null) == 'DESC' ? 'selected' : null }} value="DESC">Newest first
          </option>
          <option {{ ($_GET['order'] ?? null) == 'ASC' ? 'selected' : null }} value="ASC">Oldest first</option>
        </select>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5"
          class="pointer-events-none absolute right-3 top-3 h-6 w-6" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
      </div>
    </div>
  </form>

  @if (!$press_releases->have_posts())
    <div class="container my-16 mt-12">
      <x-alert type="warning">
        Sorry, no resources matching your criteria were found.
      </x-alert>
    </div>
  @else
    <div class="mb-16 mt-12 flex flex-col gap-4">
      @while ($press_releases->have_posts())
        @php($press_releases->the_post())
        <x-press_release-card :release="get_post()" />
      @endwhile
    </div>
  @endif
  <div class="container mt-12 text-right text-xl">
    {!! paginate_links([
        'total' => $press_releases->max_num_pages,
        'prev_text' => '<',
        'next_text' => '>',
        'format' => '?page_number=%#%',
        'add_fragment' => '#press-releases',
        'current' => $_GET['page_number'] ?? 1,
    ]) !!}
  </div>

</div>
