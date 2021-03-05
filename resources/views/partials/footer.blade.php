@if (is_front_page() )
      @include('partials.footer-home')
    @endif
  <div class="alighfull bg-blue-light text-right">
    <div class="container">
      share info
    </div>
  </div>

  <footer class="content-info bg-blue-mid text-white">
    <div class="container py-3">
      @php dynamic_sidebar('sidebar-footer') @endphp
      <div class="mx-auto text-sm text-center py-8" >Copyright &copy; @php echo date('Y') @endphp
        @php  echo bloginfo('name'); @endphp
      </div>
    </div>
</footer>
