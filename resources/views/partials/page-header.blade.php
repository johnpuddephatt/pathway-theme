<div>
  <div class="container mt-8 md:mt-12 xl:max-w-5xl 2xl:max-w-6xl">
    <div class="relative">

      @if (isset($post) && isset($post->post_type) && $post->post_type == 'post')
        <div class="mb-4 text-xl font-bold md:mb-8 md:text-2xl">
          {{ get_the_date() }}
        </div>
      @elseif(isset($post))
        @php($ancestors = array_reverse(get_post_ancestors($post->ID)))
        <div class="mb-4">
          @foreach ($ancestors as $ancestor)
            <a href="{{ get_permalink($ancestor) }}">{{ get_the_title($ancestor) }}</a> &gt;
          @endforeach
        </div>
      @endif

      <h2 class="mb-8 max-w-3xl font-serif text-5xl text-blue xl:text-6xl">
        {!! $title !!}
      </h2>

      @if (!empty($post->post_excerpt))
        <p class="mb-8 max-w-2xl text-xl leading-tight text-blue lg:text-xl">
          {!! $post->post_excerpt !!}
        </p>
      @endif

      {!! get_the_post_thumbnail($post->ID, '2by1', ['class' => ' rounded mb-8 block h-auto w-full']) !!}

    </div>
  </div>
</div>
