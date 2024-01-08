@if ($sidebarMenu)
  <aside class="2xl:[w-24rem] hidden w-[20rem] bg-beige bg-opacity-95 pb-12 pt-24 xl:block">
    <nav class="">
      <h2 class="container mb-8 font-semibold text-blue">
        <a class="pb-2 text-2xl leading-none text-blue" href=" {{ $section->permalink }}">
          {!! $section->title !!}
        </a>
      </h2>
      <ul class="page-sidebar-tree">
        {!! $sidebarMenu !!}
      </ul>
    </nav>
  </aside>
@endif
