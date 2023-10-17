  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">


          @foreach ($sidebarMenu as $menu)
              @php

                  $attr = $attributes([
                      'data-bs-target' => $menu['bs-target'] ?? null,
                      'data-bs-toggle' => !empty($menu['submenu']) ? 'collapse' : null,
                  ]);

                  $isHeading = $menu['isHeading'] ?? false;

              @endphp

              @if ($isHeading)
                  <li class="nav-heading">{{ $menu['label'] }}</li>
                  @continue
              @endif


              <li class="nav-item">
                  <a @class(['nav-link', 'collapsed' => !$menu['isOpen']]) {{ $attr }} href="{{ $menu['href'] }}">
                      <x-icon name="{{ $menu['icon'] }}"></x-icon>
                      <span>{{ $menu['label'] }}</span>
                      @if (!empty($menu['submenu']))
                          <i class="bi bi-chevron-down ms-auto"></i>
                      @endif
                  </a>


                  @if (!empty($menu['submenu']))
                      <ul id="{{ trim($menu['bs-target'] ?? null, '#') }}" @class(['nav-content', 'collapse', 'show' => $menu['isOpen']]) data-bs-parent="#sidebar-nav">
                          @foreach ($menu['submenu'] as $submenu)
                              <li>
                                  <a href="{{ $submenu['href'] }}" @class(['active' => $submenu['isActive']])>
                                      <x-icon name="bi-circle"></x-icon>
                                      <span>{{ $submenu['label'] }}</span>
                                  </a>
                              </li>
                          @endforeach


                      </ul>
                  @endif

              </li>
          @endforeach
      </ul>

  </aside><!-- End Sidebar-->
