<div class="relative my-16 overflow-hidden">

  <div class="flex flex-col gap-6">
    @foreach ($child_pages as $page)
      <x-page-card_wide :page="$page" />
    @endforeach
  </div>
</div>
