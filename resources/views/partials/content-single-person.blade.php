<article @php(post_class())>
  @include('partials.person-header')
  <div class="container mb-12 lg:mb-24">
    <div class="post-content prose xl:prose-lg">
      @php(the_content())
    </div>
  </div>

</article>
