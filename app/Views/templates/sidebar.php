<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('/'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>/dist/img/sac.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SAC</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block"><?= user()->username; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <?php if (in_groups('admin')) : ?>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link <?= $title === 'Daftar Anggota' ? 'active' : ($title === 'Aktifasi Anggota' ? 'active' : '' ); ?>">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin'); ?>" class="nav-link <?= $title === 'Aktifasi Anggota' ? 'active' : ''; ?>">
                            <i class="fas fa-check-circle nav-icon"></i>
                            <p>Aktifasi Anggota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/daftaranggota'); ?>" class="nav-link <?= $title === 'Daftar Anggota' ? 'active' : ''; ?>">
                            <i class="fas fa-address-book nav-icon"></i>
                            <p>Daftar Anggota</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link <?= $title === 'My Profile' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('user'); ?>" class="nav-link <?= $title === 'My Profile' ? 'active' : ''; ?>">
                            <i class="fas fa-id-card nav-icon"></i>
                            <p>My Profile</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-header">=============================</li>
                    <li class="nav-item">
                        <a href="<?= base_url('logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                        </a>
                    </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>