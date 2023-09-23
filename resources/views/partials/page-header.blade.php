<div>
  <div class="container mt-16 md:mt-12 xl:max-w-5xl">
    <div class="relative">

      @if (isset($post) && isset($post->post_type) && $post->post_type == 'post')
        <div class="mb-4 text-xl font-bold md:mb-8 md:text-2xl">
          {{ get_the_date() }}
        </div>
      @elseif(isset($parent))
        <div class="text-blue mb-4 mt-12 inline-flex lowercase text-opacity-70 md:mb-6">
          <a class="" href="/">Home</a>
          <span class="px-3">&gt;</span>
          <a class="" href="{{ $parent->permalink }}">{!! $parent->title !!}</a>
        </div>
      @endif

      <h2 class="text-blue max-w-3xl font-serif text-4xl lg:text-5xl xl:text-6xl">
        {!! $title !!}
      </h2>

      @if (!empty($post->post_excerpt))
        <p class="text-blue mb-8 mt-8 max-w-xl text-xl leading-tight md:text-2xl">
          {!! $post->post_excerpt !!}
        </p>
      @endif
    </div>
  </div>
</div>
