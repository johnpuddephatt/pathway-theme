<article @php(post_class())>
  <div class="container mx-auto pb-32 xl:max-w-5xl">
    <div class="flex flex-col gap-8 lg:flex-row-reverse">
      <div class="max-w-screen-sm max-lg:-mx-4 max-lg:bg-beige max-lg:p-4 lg:w-40">
        <div class="top-16 mx-auto lg:sticky">
          {!! $toc !!}
        </div>
      </div>
      <div class="flex-1 lg:px-0">
        <div class="page-content">
          {!! $content !!}
        </div>
      </div>
    </div>
  </div>
</article>
