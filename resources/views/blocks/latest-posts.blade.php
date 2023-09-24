<div class="relative mb-24 overflow-hidden">

  <div class="container">
    <h2 class="text-4xl font-semibold">{{ $fields->title }}</h2>
    <div class="mb-16 mt-16 flex flex-row gap-8">
      @foreach (get_posts('post_type=post&posts_per_page=3&orderby=date&order=desc') as $post)
        <div class="w-1/3">
          <div class="relative block">

            <p class="text-semibold mb-2">{{ get_the_date(null, $post->ID) }}</p>

            <h3 class="mb-6 text-2xl leading-tight font-bold">{{ $post->post_title }}?</h3>
            <div class="max-w-xs">
              {!! wp_trim_words(get_the_excerpt($post->ID), 15) !!}
            </div>

            <a href="{{ get_permalink($post) }}"
              class="mt-8 inline-block rounded-full bg-blue bg-opacity-80 px-6 py-2 text-sm font-semibold text-white transition duration-300 before:absolute before:inset-0 hover:bg-opacity-100">Read
              more</a>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>
