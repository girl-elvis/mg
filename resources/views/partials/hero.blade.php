  <div id="hero" class="alignfull">
    <div class="hero bg-local h-64 bg-no-repeat bg-cover w-full " style="background-image: url(@php the_post_thumbnail_url() @endphp)">

    @if (is_front_page() )
      <div class="relative  h-full ">
        <div class=" p-4 bg-primary text-white absolute top-1 md:top-2/3 left-1 w-3/4 md:w-1/2">{{ get_bloginfo('description', 'display') }}</div></div>
    @endif


    </div>


  </div>
