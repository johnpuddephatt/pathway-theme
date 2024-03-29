<div class="relative mb-8 overflow-hidden lg:mb-24">
  <h2 class="wp-block-heading">{{ $fields->title }}</h2>

  <div class="container">
    <div class="mb-16 mt-16 flex flex-col gap-12 lg:flex-row lg:gap-8">
      @foreach (get_posts([
        'post_type' => ['post', 'press_release'],
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'desc',
    ]) as $post)
        <div class="relative flex flex-col items-start lg:w-1/3">

          <p class="mb-2 font-semibold">{{ get_the_date(null, $post->ID) }}</p>

          <h3 class="mb-6 max-w-xl text-xl font-bold leading-tight lg:text-2xl">{{ $post->post_title }}</h3>
          <div class="mb-8 max-w-sm lg:max-w-xs">
            {!! wp_trim_words($post->post_excerpt ?? get_the_excerpt($post->ID), 30) !!}
          </div>

          <a href="{{ get_permalink($post) }}"
            class="mt-auto inline-block rounded-full bg-blue bg-opacity-80 px-6 py-2 text-sm font-semibold text-white transition duration-300 before:absolute before:inset-0 hover:bg-opacity-100">Read
            more</a>
        </div>
      @endforeach

    </div>
  </div>
</div>
