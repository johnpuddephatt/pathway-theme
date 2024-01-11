<div class="wp-block alignwide my-16">

  <h2 class="wp-block-heading mb-8">{{ $fields->title ?? 'Staff' }}</h2>

  @if ($fields->description)
    <p>{{ $fields->description }}</p>
  @endif

  <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
    @foreach ($staff as $person)
      @include('components.staff-card', ['person' => $person])
    @endforeach
  </div>

</div>
