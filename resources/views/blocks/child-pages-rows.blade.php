<div class="relative overflow-hidden py-8 md:py-16">

  <div class="flex flex-col gap-6">
    @foreach ($child_pages as $page)
      <x-page-card_wide :page="$page" />
    @endforeach
  </div>
</div>
