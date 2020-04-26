<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ Request::is('') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.home') }}">Trang chủ</a>
                        </li>
                        <li class="{{ Request::is('gioi-thieu') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.about') }}">Giới thiệu</a>
                        </li>
                        <li>
                            <li class="{{ Request::is('san-pham') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.product') }}">Sản phẩm</a>
                        </li>
                        <li class="{{ Request::is('lien-he') ? 'active-menu' : '' }}">
                           <a href="{{ route('frontend.contact') }}">Liên hệ</a>
                        </li>
                        @if(Auth::check())
                            @role('quan_tri|user')
                            <li class="{{ Request::is('order') ? 'active-menu' : '' }}">
                                <a href="{{ route('order.index') }}">Đặt món</a>
                            </li>
                            @endrole
                        @endif
                        @if(Auth::check())
                            @role('quan_tri')
                            <li class="{{ Request::is('Danh-muc') ? 'active-menu' : '' }}">
                                <a href="{{ route('admin.index') }}">Danh mục</a>
                            </li>
                            @endrole
                        @endif
                        <li class="{{ Request::is('login') ? 'active-menu' : '' }}">
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                        @if(Auth::check())
                        <li class="{{ Request::is('logout') ? 'active-menu' : '' }}">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>