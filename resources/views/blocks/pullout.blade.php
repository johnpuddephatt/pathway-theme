<div
  class="{{ $fields->background_colour ?? 'bg-green' }} wp-block wp-block-pullout relative mb-16 overflow-hidden rounded p-px !text-base lg:mb-24">

  <div class="p-2">
    {{ $fields->title }}
  </div>
  <div class="bg-white p-4">
    {!! $fields->content !!}
  </div>
</div>
