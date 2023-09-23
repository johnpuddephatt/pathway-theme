<article
  @php(post_class())>
  @include('partials.vacancy-header')
  <div class="container mb-24">
    <div class="flex flex-col gap-8 lg:flex-row-reverse items-start">
      <div class="max-w-screen-sm lg:w-96 rounded bg-yellow bg-opacity-20 p-8 pb-4">
      <h3 class="font-bold text-xl mb-3">Key information</h3>
        <ul class="max-w-lg divide-y divide-yellow ">
          @if (carbon_get_post_meta(get_the_ID(), 'deadline'))
            <li class="py-4 flex flex-row gap-2 leading-none"><div class="font-semibold w-24">Deadline:</div> {{ date(get_option('date_format'), strtotime(carbon_get_post_meta(get_the_ID(), 'deadline'))) }}</li>
          @endif

          @if (carbon_get_post_meta(get_the_ID(), 'contract_type'))
            <li class="py-4 flex flex-row gap-2 leading-none"><div class="font-semibold w-24">Contract:</div> {{ carbon_get_post_meta(get_the_ID(), 'contract_type') }}</li>
          @endif

          @if (carbon_get_post_meta(get_the_ID(), 'salary'))
            <li class="py-4 flex flex-row gap-2 leading-none"><div class="font-semibold w-24">Salary:</div> {{ carbon_get_post_meta(get_the_ID(), 'salary') }}</li>
          @endif

          @if (carbon_get_post_meta(get_the_ID(), 'hours'))
            <li class="py-4 flex flex-row gap-2 leading-none"><div class="font-semibold w-24">Hours:</div>{{ carbon_get_post_meta(get_the_ID(), 'hours') }}</li>
          @endif
  </ul>
  </div>
  <div class="post-content flex-1">
    @php(the_content())
  </div>
  </div>
  </div>
</article>
