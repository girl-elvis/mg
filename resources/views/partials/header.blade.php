<header class="banner bg-gray-300">

  <div class="loginstrip bg-gray-700 p-4 grid justify-end">
    <div>
      <!-- <a href=# class=" text-white">Login </a>/ <a href=#  class=" text-white">Register</a>  -->
      @if ( is_user_logged_in() )
        Hello {{ $user_info[0]}} / <a href="/wp-admin/profile.php" >My Account</a>
         @else
        <a href="/wp-login.php" >Login/Register</a>

      @endif
</div>
  </div>

  <div class="flex justify-between md:items-end">

     <!-- Logo -->
    <div class="p-5">
      <div class=" bg-primary py-5 w-24 text-center rounded-full">
          <a class="brand text-white " href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      </div>
    </div>

<!-- Burger -->
  <div class="flex md:hidden mr-5 items-top">
    <button id="hamburger">
      <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
      <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
    </button>
  </div>

<!-- Nav menu -->
     <div class="hidden md:block">
      <nav class="mb-4">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'container_aria_label'=> 'primary',
              'container_class' => '',
              'menu_class' => 'nav relative z-20 flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row',
              'before' => '',
                'after' => "",

            ]) !!}
          @endif
        </nav>
    </div>
  </div>


  <nav class="mobilemenu md:hidden">
      @if (has_nav_menu('mobile_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'mobile_navigation',
          'container_aria_label'=> 'primary',
          'container_class' => 'toggle hidden w-full ',
          'menu_class' => 'list-none p-5 w-full left mt-5 md:mt-0  ',
          'before' => '',
            'after' => "",

        ]) !!}
      @endif
    </nav>


</header>
