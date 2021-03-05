<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @if (has_post_thumbnail())
      @include('partials.hero')
    @endif
    <div class="wrap wrap mb-12" role="document">
      <div class="content @if ($side_bar) flex flex-col md:flex-row @endif container">
       <!--  <main class="main  @if (!has_post_thumbnail() ) container @endif "> -->
           <main class="main @if ($side_bar) w-full md:w-3/4 @endif" >
          @yield('content')
        </main>
        @if ($side_bar)
          <aside class="sidebar w-full flex-row md:flex-col md:w-1/4 mt-16">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
