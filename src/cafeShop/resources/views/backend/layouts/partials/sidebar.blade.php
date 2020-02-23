<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <header>Danh mục</header>
            <!--   Cửa hàng -->
            <li class="treeview {{ Request::is('admin/danhsachcuahang*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachcuahang.index') }}"><i class="fa fa-link"></i> <span> Cửa hàng</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachcuahang*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachcuahang') ? 'active' : '' }}"><a href="{{ route('danhsachcuahang.index') }}">Danh sách cửa hàng</a></li>
                <li class="{{ Request::is('admin/danhsachcuahang/create') ? 'active' : '' }}"><a href="{{ route('danhsachcuahang.create') }}">Thêm mới cửa hàng</a></li>
              </ul>
            </li>
            <!--   Chi nhánh -->
            <li class="treeview {{ Request::is('admin/danhsachchinhanh*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachchinhanh.index') }}"><i class="fa fa-link"></i> <span> Chi nhánh</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachchinhanh*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachchinhanh') ? 'active' : '' }}"><a href="{{ route('danhsachchinhanh.index') }}">Danh sách chi nhánh</a></li>
                <li class="{{ Request::is('admin/danhsachchinhanh/create') ? 'active' : '' }}"><a href="{{ route('danhsachchinhanh.create') }}">Thêm mới chi nhánh</a></li>
              </ul>
            </li>
            <!--  loại loại món ăn -->
            <li class="treeview {{ Request::is('admin/danhsachloaimonan*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachloaimonan.index') }}"><i class="fa fa-link"></i> <span> Loại món ăn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachloaimonan*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachloaimonan') ? 'active' : '' }}"><a href="{{ route('danhsachloaimonan.index') }}">Danh sách loại món ăn</a></li>
                <li class="{{ Request::is('admin/danhsachloaimonan/create') ? 'active' : '' }}"><a href="{{ route('danhsachloaimonan.create') }}">Thêm mới loại món ăn</a></li>
              </ul>
            </li>
            <!--  loại nhóm thực đơn -->
            <li class="treeview {{ Request::is('admin/danhsachnhomthucdon*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachnhomthucdon.index') }}"><i class="fa fa-link"></i> <span> Nhóm thực đơn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachnhomthucdon*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachnhomthucdon') ? 'active' : '' }}"><a href="{{ route('danhsachnhomthucdon.index') }}">Danh sách nhóm thực đơn</a></li>
                <li class="{{ Request::is('admin/danhsachnhomthucdon/create') ? 'active' : '' }}"><a href="{{ route('danhsachnhomthucdon.create') }}">Thêm mới nhóm thực đơn</a></li>
              </ul>
            </li>
            
            <!--  món ăn -->
            <li class="treeview {{ Request::is('admin/danhsachmonan*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachmonan.index') }}"><i class="fa fa-link"></i> <span> Món ăn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachmonan*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachmonan') ? 'active' : '' }}"><a href="{{ route('danhsachmonan.index') }}">Danh sách món ăn</a></li>
                <li class="{{ Request::is('admin/danhsachmonan/create') ? 'active' : '' }}"><a href="{{ route('danhsachmonan.create') }}">Thêm mới món ăn</a></li>
              </ul>
            </li>
            
            <!--   bếp -->
            <li class="treeview {{ Request::is('admin/danhsachbep*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachbep.index') }}"><i class="fa fa-link"></i> <span> Bếp</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachbep*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachbep') ? 'active' : '' }}"><a href="{{ route('danhsachbep.index') }}">Danh sách bếp</a></li>
                <li class="{{ Request::is('admin/danhsachbep/create') ? 'active' : '' }}"><a href="{{ route('danhsachbep.create') }}">Thêm mới bếp</a></li>
              </ul>
            </li>
            <!--   tầng -->
            <li class="treeview {{ Request::is('admin/danhsachtang*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachtang.index') }}"><i class="fa fa-link"></i> <span> Tầng</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachtang*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachtang') ? 'active' : '' }}"><a href="{{ route('danhsachtang.index') }}">Danh sách tầng</a></li>
                <li class="{{ Request::is('admin/danhsachtang/create') ? 'active' : '' }}"><a href="{{ route('danhsachtang.create') }}">Thêm mới tầng</a></li>
              </ul>
            </li>
            <!--   bàn -->
            <li class="treeview {{ Request::is('admin/danhsachban*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachban.index') }}"><i class="fa fa-link"></i> <span> Bàn</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachban*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachban') ? 'active' : '' }}"><a href="{{ route('danhsachban.index') }}">Danh sách bàn</a></li>
                <li class="{{ Request::is('admin/danhsachban/create') ? 'active' : '' }}"><a href="{{ route('danhsachban.create') }}">Thêm mới bàn</a></li>
              </ul>
            </li>
            <!--   đơn vị tính -->
            <li class="treeview {{ Request::is('admin/danhsachdonvitinh*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachdonvitinh.index') }}"><i class="fa fa-link"></i> <span> Đơn vị tính</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachdonvitinh*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachdonvitinh') ? 'active' : '' }}"><a href="{{ route('danhsachdonvitinh.index') }}">Danh sách đơn vị tính</a></li>
                <li class="{{ Request::is('admin/danhsachdonvitinh/create') ? 'active' : '' }}"><a href="{{ route('danhsachdonvitinh.create') }}">Thêm mới đơn vị tính</a></li>
              </ul>
            </li>
            <!--   bộ phận  -->
            <li class="treeview {{ Request::is('admin/danhsachbophan*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachbophan.index') }}"><i class="fa fa-link"></i> <span> Bộ phận</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachbophan*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachbophan') ? 'active' : '' }}"><a href="{{ route('danhsachbophan.index') }}">Danh sách bộ phận</a></li>
                <li class="{{ Request::is('admin/danhsachbophan/create') ? 'active' : '' }}"><a href="{{ route('danhsachbophan.create') }}">Thêm mới bộ phận</a></li>
              </ul>
            </li>
            <!--   chức vụ -->
            <li class="treeview {{ Request::is('admin/danhsachchucvu*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachchucvu.index') }}"><i class="fa fa-link"></i> <span> Chức vụ</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachchucvu*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachchucvu') ? 'active' : '' }}"><a href="{{ route('danhsachchucvu.index') }}">Danh sách chức vụ</a></li>
                <li class="{{ Request::is('admin/danhsachchucvu/create') ? 'active' : '' }}"><a href="{{ route('danhsachchucvu.create') }}">Thêm mới chức vụ</a></li>
              </ul>
            </li>
            <!--   Nhân viên-->
            <li class="treeview {{ Request::is('admin/danhsachnhanvien*') ? 'menu-open' : '' }}">
              <a href="{{ route('danhsachnhanvien.index') }}"><i class="fa fa-link"></i> <span>Nhân viên</span>
              </a>
              <ul class="treeview-menu" style="display: {{ Request::is('admin/danhsachnhanvien*') ? 'block' : 'none' }};">
                <li class="{{ Request::is('admin/danhsachnhanvien') ? 'active' : '' }}"><a href="{{ route('danhsachnhanvien.index') }}">Danh sách nhân viên</a></li>
                <li class="{{ Request::is('admin/danhsachnhanvien/create') ? 'active' : '' }}"><a href="{{ route('danhsachnhanvien.create') }}">Thêm mới nhân viên</a></li>
              </ul>
            </li>
        </ul>
    </div>
</nav>
