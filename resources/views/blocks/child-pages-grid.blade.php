<div class="relative mb-24 overflow-hidden">

  <div class="container grid grid-cols-3 gap-8">
    @foreach ($child_pages as $page)
      <x-page-card :page="$page" />
    @endforeach
  </div>
</div>
