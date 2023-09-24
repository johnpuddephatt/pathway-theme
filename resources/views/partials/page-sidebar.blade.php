@if ($sidebarMenu)
  <aside class="hidden w-[20rem] bg-beige bg-opacity-95 pb-12 pt-24 xl:block">
    <nav class="">
      <h2 class="container mb-12 font-semibold text-blue">
        <a class="pb-2 text-3xl text-blue" href=" {{ $section->permalink }}">
          {!! $section->title !!}
        </a>
      </h2>
      <ul class="page-sidebar-tree">
        {!! $sidebarMenu !!}
      </ul>
    </nav>
  </aside>
@endif
