<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{asset('icon.png')}}" alt="Girl in a jacket" width="40px;" height="40px;"> <a
                href="/">PETSHOP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"><img src="{{asset('icon.png')}}" alt="Girl in a jacket" width="45px;" height="45px;"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Admin</li>
            <li class="active"><a class="nav-link" href="/dashboard"><i
                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            </li>
            <li class="menu-header">Manajemen User</li>
            <li><a class="nav-link" href="/manajemenuser"><i class="fas fa-user-alt"></i><span>Manajemen
                        User</span></a></li>
            </li>
            <li class="menu-header">Manajemen Produk</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-tags"></i><span>Manajemen Produk</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/product">Produk</a></li>
                        <li><a class="nav-link" href="/uom">Unit of Measure</a></li>
                    </ul>
                </li>
            </li>
            <li class="menu-header">Manajemen Pembayaran</li>
            <li><a class="nav-link" href="/payment"><i class="fas fa-money-bill-wave"></i><span>Payment</span></a></li>
            </li>
            
    </aside>
</div>