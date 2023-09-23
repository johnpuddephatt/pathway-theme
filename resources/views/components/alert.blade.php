<div class="mx-auto max-w-2xl overflow-hidden rounded-xl" {{ $attributes }}>
  <div class="border-yellow bg-yellow border-l-[1rem] bg-opacity-30 p-8">
    {!! $message ?? $slot !!}
  </div>
</div>
