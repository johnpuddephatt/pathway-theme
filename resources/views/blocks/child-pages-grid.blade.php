<div class="relative mb-8 overflow-hidden md:mb-16 lg:mb-24">

  <div class="container grid gap-4 md:grid-cols-2 md:gap-8 lg:grid-cols-3">
    @foreach ($child_pages as $page)
      <x-page-card :page="$page" />
    @endforeach
  </div>
</div>
