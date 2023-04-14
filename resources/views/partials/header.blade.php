<header class="header">
    <nav class="header-menu">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-between">
                <div class="flex items-center w-1/4 md:w-1/3">
                    <div class="header-menu__logo">
                        <a href="{{ home_url('/') }}">
                            <img src="{!! get_template_directory_uri() !!}/assets/images/logo.svg" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="hidden w-3/4 pl-4 pr-4 md:w-2/3">
                    @if (has_nav_menu('navigation'))
                        {!! wp_nav_menu([
                            'theme_location' => 'navigation',
                            'container_class' => 'ms-auto header-menu__navigation',
                            'menu_class' => 'navbar-nav d-sm-flex d-none',
                        ]) !!}
                    @endif
                </div>
                <div class="w-1/6 header-menu__hamburger-icon" id="js-header-menu-hamburger">
                    <svg width="100" height="100" viewBox="0 0 100 100">
                        <path class="line line1"
                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />

                        <path class="line line2"
                            d="M 20,50 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />

                        <path class="line line3"
                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </div>
            </div>
        </div>

    </nav>
</header>
<div class="hamburger-content">
    <div class="hamburger-content-wrapper d-flex align-items-center">
        <div class="container-fluid container-lg">
            <div class="row d-flex align-items-stretch">
                <div class="col-12">
                    @if (has_nav_menu('navigation'))
                        {!! wp_nav_menu([
                            'theme_location' => 'navigation',
                            'container_class' => 'ms-auto header-menu__navigation',
                            'menu_class' => 'navbar-nav d-sm-flex d-none',
                        ]) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
