<div class="sidebar-menu">
    <div class="sidebar-header">
        <a href="{{ url('admin/dashboard') }}">
            <div class="logo">
                <h2><b>SOGE</b>POS</h2>
                Your Resto/Cafe Name
            </div>
        </a>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <!-- <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                        <ul class="collapse"> -->
                            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-fw fa-sliders"></i> <span>Dashboard</span></a>
                            </li>
                        <!-- </ul>
                    </li> -->
                    
                    <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-fw fa-user"></i><span>User</span></a>
                        <!-- <a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>User</span></a> -->
                        <ul class="collapse">
                            <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
                                <a href="{{ url('admin/user') }}">List User</a>
                            </li>
                            <li class="{{ Request::is('admin/user/create') ? 'active' : '' }}">
                                <a href="{{ url('admin/user/create') }}">Buat User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('admin/customer') ? 'active' : '' }}"><a href="{{ url('admin/customer') }}"><i class="fa fa-fw fa-users"></i> <span>Customer</span></a></li>
                    <li class="{{ Request::is('admin/product') ? 'active' : '' }}"><a href="{{ url('admin/product') }}"><i class="fa fa-fw fa-cutlery"></i> <span>Produk</span></a></li>
                    <!-- <li class="{{ Request::is('admin/category') ? 'active' : '' }}"><a href="{{ url('admin/category') }}"><i class="fa fa-fw fa-pie-chart"></i> <span>Kategori</span></a></li> -->
                    <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-fw fa-pie-chart"></i><span>Kategori</span></a>
                        <ul class="collapse">
                            <li class="{{ Request::is('admin/category/product') ? 'active' : '' }}">
                                <a href="{{ url('admin/category/product') }}">Kategori Produk</a>
                            </li>
                            <li class="{{ Request::is('admin/category/payment') ? 'active' : '' }}">
                                <a href="{{ url('admin/category/payment') }}">Kategori Pembayaran</a>
                            </li>
                            <li class="{{ Request::is('admin/category/ordertype') ? 'active' : '' }}">
                                <a href="{{ url('admin/category/ordertype') }}">Kategori Pesanan</a>
                            </li>
                        </ul>
                    </li>
                    @if( Auth::user()->hasRole('admin') )
                        <li class="{{ Request::is('admin/config') ? 'active' : '' }}"><a href="{{ url('admin/config') }}"><i class="fa fa-fw fa-wrench"></i> <span>Pengaturan</span></a></li>
                    @endif
                    
                </ul>
            </nav>
        </div>
    </div>
</div>