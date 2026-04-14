<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">PERPUSTAKAAN</div>
    </a>

    <hr class="sidebar-divider">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Kategori -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('kategori') ?>">
            <i class="fas fa-folder"></i>
            <span>Kategori</span>
        </a>
    </li>

    <!-- Buku -->
   <li class="<?= $this->uri->segment(1)=='buku' ? 'nav-item active' : 'nav-item' ?>">
    <a class="nav-link" href="<?= site_url('buku') ?>">
        <i class="fas fa-book"></i>
        <span>Buku</span>
    </a>
</li>

</ul>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
    <span class="ml-auto mr-3">Admin</span>
</nav>

<div class="container-fluid">