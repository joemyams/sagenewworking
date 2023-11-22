<header class="banner flex justify-between">
  <a class="brand" href="{{ home_url('/') }}">
    {!! wp_get_attachment_image( $siteLogo ) !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
{{--
  <x-hello class="bg-red-600 text-white">
    <span>Hello World</span>
  </x-hello> --}}

  <x-button type="outline" :href="$btn['url']">
    {{ $btn['title'] }}
  </x-button>

  <x-button type="primary" :href="$btn2['url']">
    {{ $btn2['title'] }}
  </x-button>


</header>
