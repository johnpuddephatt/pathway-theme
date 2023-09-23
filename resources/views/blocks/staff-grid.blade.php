<div class="wp-block my-16">

  <h2 class="wp-block-heading mb-8">Staff Grid</h2>

  <div class="grid gap-8 md:grid-cols-3">
    @foreach ($staff as $person)
      @include('components.staff-card', ['person' => $person])
    @endforeach
  </div>

</div>
