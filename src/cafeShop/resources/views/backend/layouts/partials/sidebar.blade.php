<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <!-- Danh mục loại loại món ăn -->
            <li class="treeview {{ Request::is('admin/danhsachloaimonan*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachloaimonan.index') }}"><i class="fa fa-link"></i> <span>Danh mục Loại món ăn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachloaimonan*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachloaimonan') ? 'active' : '' }}"><a href="{{ route('danhsachloaimonan.index') }}">Danh sách loại món ăn</a></li>
                <li class="{{ Request::is('admin/danhsachloaimonan/create') ? 'active' : '' }}"><a href="{{ route('danhsachloaimonan.create') }}">Thêm mới loại món ăn</a></li>
              </ul>
            </li>
            <!-- Danh mục loại nhóm thực đơn -->
            <li class="treeview {{ Request::is('admin/danhsachnhomthucdon*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachnhomthucdon.index') }}"><i class="fa fa-link"></i> <span>Danh mục nhóm thực đơn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachnhomthucdon*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachnhomthucdon') ? 'active' : '' }}"><a href="{{ route('danhsachnhomthucdon.index') }}">Danh sách nhóm thực đơn</a></li>
                <li class="{{ Request::is('admin/danhsachnhomthucdon/create') ? 'active' : '' }}"><a href="{{ route('danhsachnhomthucdon.create') }}">Thêm mới nhóm thực đơn</a></li>
              </ul>
            </li>
            
            <!-- Danh mục món ăn -->
            <li class="treeview {{ Request::is('admin/danhsachmonan*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachmonan.index') }}"><i class="fa fa-link"></i> <span>Danh mục món ăn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachmonan*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachmonan') ? 'active' : '' }}"><a href="{{ route('danhsachmonan.index') }}">Danh sách món ăn</a></li>
                <li class="{{ Request::is('admin/danhsachmonan/create') ? 'active' : '' }}"><a href="{{ route('danhsachmonan.create') }}">Thêm mới món ăn</a></li>
              </ul>
            </li>
            
            <!-- Danh mục loại bếp -->
            <li class="treeview {{ Request::is('admin/danhsachbep*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachbep.index') }}"><i class="fa fa-link"></i> <span>Danh mục bếp</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachbep*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachbep') ? 'active' : '' }}"><a href="{{ route('danhsachbep.index') }}">Danh sách bếp</a></li>
                <li class="{{ Request::is('admin/danhsachbep/create') ? 'active' : '' }}"><a href="{{ route('danhsachbep.create') }}">Thêm mới bếp</a></li>
              </ul>
            </li>
            <!-- Danh mục loại tầng -->
            <li class="treeview {{ Request::is('admin/danhsachtang*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachtang.index') }}"><i class="fa fa-link"></i> <span>Danh mục tầng</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachtang*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachtang') ? 'active' : '' }}"><a href="{{ route('danhsachtang.index') }}">Danh sách tầng</a></li>
                <li class="{{ Request::is('admin/danhsachtang/create') ? 'active' : '' }}"><a href="{{ route('danhsachtang.create') }}">Thêm mới tầng</a></li>
              </ul>
            </li>
            <!-- Danh mục loại bàn -->
            <li class="treeview {{ Request::is('admin/danhsachban*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachban.index') }}"><i class="fa fa-link"></i> <span>Danh mục bàn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachban*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachban') ? 'active' : '' }}"><a href="{{ route('danhsachban.index') }}">Danh sách bàn</a></li>
                <li class="{{ Request::is('admin/danhsachban/create') ? 'active' : '' }}"><a href="{{ route('danhsachban.create') }}">Thêm mới bàn</a></li>
              </ul>
            </li>
        </ul>
    </div>
</nav>
