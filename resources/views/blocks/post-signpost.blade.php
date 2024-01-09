@if (isset($fields->post[0]['id']))
  @php($post = get_post($fields->post[0]['id']))

  <a href="{{ get_permalink($post->ID) }}"
    class="wp-block not-prose group relative flex flex-row items-center rounded bg-beige bg-opacity-50 text-blue !no-underline transition hover:bg-opacity-80">
    <div class="clip-hex mx-6 my-6 hidden w-20 flex-none bg-beige md:block">
      {!! get_the_post_thumbnail($post->ID, 'square', [
          'class' => ' !h-full w-full object-cover',
      ]) !!}
    </div>
    <div class="flex flex-col items-start p-4 pl-0">
      @if ($fields->show_date)
        <div class="mb-1.5 mt-auto text-sm font-semibold antialiased">
          {{ get_the_date(null, $post->ID) }}
        </div>
      @endif
      <h3 class="max-w-3xl text-lg font-semibold !leading-tight lg:text-xl">
        {{ $fields->title ?: $post->post_title }}</h3>

    </div>

    @include('partials.card-arrow', ['class' => 'group-hover:bg-beige'])

  </a>
@endif
