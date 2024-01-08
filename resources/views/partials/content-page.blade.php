<article @php(post_class())>
  <div class="container mx-auto pb-32 xl:max-w-5xl 2xl:max-w-6xl">
    <div class="flex flex-col gap-8 lg:flex-row-reverse">
      <div class="max-w-screen-sm max-lg:bg-beige max-lg:p-4 max-sm:-mx-4 lg:w-48">
        <div class="top-16 mx-auto lg:sticky">
          {!! $toc !!}
        </div>
      </div>
      <div class="flex-1 lg:px-0">
        <div class="page-content" id="overview">
          {!! $content !!}
        </div>
      </div>
    </div>
  </div>
</article>
