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
              <a href="danhsachloaimonan"><i class="fa fa-link"></i> <span>Danh mục Loại món ăn</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachloaimonan*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachloaimonan') ? 'active' : '' }}"><a href="{{ route('danhsachloaimonan.index') }}">Danh sách loại sản phẩm</a></li>
                <li class="{{ Request::is('admin/danhsachloaimonan/create') ? 'active' : '' }}"><a href="{{ route('danhsachloaimonan.create') }}">Thêm mới loại sản phẩm</a></li>
              </ul>
            </li>
            <!-- /.Danh mục loại loại món ăn -->
        </ul>
    </div>
</nav>