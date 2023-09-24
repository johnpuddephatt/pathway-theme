<article
  @php(post_class())>
  @include('partials.post-header', ['subtitle' =>   carbon_get_post_meta(get_the_ID(), 'start_date') ? date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'start_date'))) : '', 'background_colour' => 'bg-blue text-white'])
  <div class="container mb-24">
    <div class="flex flex-col gap-8 lg:flex-row-reverse items-start">
      <div class="max-w-screen-sm lg:w-96 rounded bg-blue bg-opacity-10 p-8 pb-4">
      <h3 class="font-bold text-xl mb-3">Key information</h3>
        <ul class="max-w-lg divide-y divide-blue divide-opacity-20">
         @if (carbon_get_post_meta(get_the_ID(), 'start_date'))
            <li class="py-6 flex flex-row gap-2 leading-none"><div class="font-semibold w-24">Time/date:</div> 
            <div>
         {{ date(get_option('time_format') . ' ' . get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'start_date'))) }}
        
            </div>
            @endif
          @if (carbon_get_post_meta(get_the_ID(), 'location'))
            <li class="py-6 flex flex-row gap-2 leading-none"><div class="font-semibold w-24">Location:</div> 
            <div>
        {{ carbon_get_post_meta(get_the_ID(), 'location') }}
          
            </div>
          @endif
  @if (carbon_get_post_meta(get_the_ID(), 'booking_link'))
  <li class="flex flex-row gap-2 py-6 leading-none">
    <div class="w-24 font-semibold">Booking:</div>
    <div>
    <a href="{{ carbon_get_post_meta(get_the_ID(), 'booking_link') }}" target="_blank" class="bg-yellow px-8  rounded-full  py-2">Book now</a>

    </div>
  </li>
@endif
  </ul>
  </div>
  <div class="post-content flex-1">
    @php(the_content())
  </div>
  </div>
  </div>
</article>
