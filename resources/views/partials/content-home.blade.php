
<div class="container mx-auto">
  <h2 class="h1 text-center py-0 md:pt-3 md:pb-10">Guidence for Practitioners</h2>

  <div class="grid md:grid-cols-2 border-solid">

    @foreach ($home_extras as $page)
        <div class="mb-8 md:mx-8 p-8 border-10 border-yellow">
          <h2 class="mt-0">{{ $page->post_title }}</h2>
          <div>@php the_excerpt( $page->ID ) @endphp </div>
          <div><a href="{{ $page->guid }}" class="">Read More</a></div>
        </div>
    @endforeach
  </div>

</div>