@if (isset($fields->page[0]['id']))
  @php($page = get_post($fields->page[0]['id']))
  <a href="{{ get_permalink($page->ID) }}"
    class="wp-block group relative my-6 flex flex-row items-center rounded bg-beige bg-opacity-60 !no-underline transition hover:bg-opacity-80">
    <div class="clip-hex !my-4 !ml-5 !mr-5 w-20 flex-none bg-white bg-opacity-80">
      {!! get_the_post_thumbnail($page->ID, 'square', [
          'class' => 'aspect-[0.9] object-cover h-auto !my-0 block w-20',
      ]) !!}
    </div>
    <div class="">
      <h3 class="!my-0 p-6 pl-0 !text-xl font-bold !leading-tight">{{ $fields->title ?: $page->post_title }}</h3>
    </div>

    @include('partials.card-arrow', ['class' => 'group-hover:bg-beige group-hover:bg-opacity-100'])

  </a>
@endif
