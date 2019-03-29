        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>admin">

                <div class="sidebar-brand-text mx-3"> SMAN 4 MACIPO</h6>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Tambah Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Tambah Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('admin/tambah_guru'); ?>"><i class="fas fa-chalkboard-teacher"></i> Tambah Guru</a>
                        <a class="collapse-item" href="<?= base_url('admin/tambah_siswa'); ?>"><i class="fas fa-user-graduate"></i> Tambah Siswa</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU EDIT SISWA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEdit" aria-expanded="true" aria-controls="collapseEdit">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Edit Data</span>
                </a>
                <div id="collapseEdit" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('admin/tambah_guru'); ?>"><i class="fas fa-chalkboard-teacher"></i> Data Guru</a>
                        <a class="collapse-item" href="<?= base_url('admin/tambah_guru'); ?>"><i class="fas fa-user-graduate"></i> Siswa Kelas 10</a>
                        <a class="collapse-item" href="<?= base_url('admin/tambah_siswa'); ?>"><i class="fas fa-user-graduate"></i> Siswa Kelas 11</a>
                        <a class="collapse-item" href="<?= base_url('admin/tambah_siswa'); ?>"><i class="fas fa-user-graduate"></i> Siswa Kelas 12</a>
                    </div>
                </div>
            </li>
            <!-- Upload Pengumuman -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-pencil-ruler"></i>
                    <span>Pengumuman</span></a>
            </li>

            <!-- Atur SPP -->
            <li class=" nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-hand-holding-usd"></i>
                    <span>SPP Siswa</span></a>
            </li>

            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul> 