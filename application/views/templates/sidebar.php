<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <img class="img-profile rounded-circle" width="45px" src="<?= base_url('assets/'); ?>img/undraw_rocket.svg">
                
                </div>
                <div class="sidebar-brand-text mx-1">
                    <small>
                        <span class="text-white"><b>Portal Jobs</b></span>
                    </small>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/employe'); ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Employe</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/jobseeker'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Jobseeker</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="< ?= base_url('admin/company'); ?>">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Company</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>User Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Users:</h6>
                        <a class="collapse-item" href="#">Profile</a>
                        <a class="collapse-item" href="#">Edit Profile</a>
                        <a class="collapse-item" href="#">Change Password</a>
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->