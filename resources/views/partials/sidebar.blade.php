<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Laundry</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Data User -->
<li class="nav-item {{ Route::current()->uri == 'users' ? 'active' : '' }}">  
    <a class="nav-link" href="{{ route('user.getUser')  }}">
        <i class="fa fa-users"></i>
        <span>Data User </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link " href="{{ route('customer.getCustomer')  }}">
        <i class="fa fa-users"></i>
        <span>Data Pelanggan </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link  " href="{{ route('type.getType') }}">
        <i class="fa fa-key"></i>
        <span>Jenis Laundry</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('laundry.getLaundry')  }}">
        <i class="fa fa-cart-plus"></i>
        <span>Transkasi Laundry</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fa fa-book"></i>
        <span>Data Pengeluaran </span>
    </a>
</li>


<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fa fa-book"></i>
        <span>Data Laporan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->