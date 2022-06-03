<?php
// variable untuk tiap menu sidebar
$index = $homepage = $akd = $news = $edocument = $agenda = $gallery = $tentang = $contact = $easpirasi = '';

// logika jika ada halaman yang aktif
if (!$this->uri->segment(2)) {
    $index = 'active';
} elseif ($this->uri->segment(2) == 'homepage') {
    $homepage = 'active';
} elseif ($this->uri->segment(2) == 'akd') {
    $akd = 'active';
} elseif ($this->uri->segment(2) == 'news') {
    $news = 'active';
} elseif ($this->uri->segment(2) == 'eDocument') {
    $edocument = 'active';
} elseif ($this->uri->segment(2) == 'agenda') {
    $agenda = 'active';
} elseif ($this->uri->segment(2) == 'gallery') {
    $gallery = 'active';
} elseif ($this->uri->segment(2) == 'tentang') {
    $tentang = 'active';
} elseif ($this->uri->segment(2) == 'contact') {
    $contact = 'active';
} elseif ($this->uri->segment(2) == 'eAspirasi') {
    $easpirasi = 'active';
}
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('') ?>assets/img/Kabupaten-Banggai-Laut.png" style="height: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">
            <span>DPRD</span>
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $index; ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item <?= $homepage; ?>">
        <a class="nav-link" href="<?= base_url('admin/homepage') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Homepage</span>
        </a>
    </li>
    <li class="nav-item <?= $akd; ?>">
        <a class="nav-link" href="<?= base_url('admin/akd/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>AKD</span>
        </a>
    </li>
    <li class="nav-item <?= $news; ?>">
        <a class="nav-link" href="<?= base_url('admin/news/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>News</span>
        </a>
    </li>
    <li class="nav-item <?= $edocument; ?>">
        <a class="nav-link" href="<?= base_url('admin/eDocument/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>e-Document</span>
        </a>
    </li>
    <li class="nav-item <?= $agenda; ?>">
        <a class="nav-link" href="<?= base_url('admin/agenda/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Agenda</span>
        </a>
    </li>
    <li class="nav-item <?= $gallery; ?>">
        <a class="nav-link" href="<?= base_url('admin/gallery/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item <?= $tentang; ?>">
        <a class="nav-link" href="<?= base_url('admin/tentang') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Tentang</span>
        </a>
    </li>
    <li class="nav-item <?= $contact; ?>">
        <a class="nav-link" href="<?= base_url('admin/contact') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Contact</span>
        </a>
    </li>
    <li class="nav-item <?= $easpirasi; ?>">
        <a class="nav-link" href="<?= base_url('admin/eAspirasi') ?>">
            <i class="fa-solid fa-file"></i>
            <span>e-Aspirasi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<div class="w-100 m-5">