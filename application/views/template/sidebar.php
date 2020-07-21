    <?php if($this->session->userdata('role') == 1 ){
      ?>
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Beranda</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('dashboard'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-desktop"></i>
          <span>Beranda</span>
        </a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Pengelolaan User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('pengguna/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user"></i>
          <span>Pengguna</span>
        </a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
<!--       <li class="nav-item">
        <a class="nav-link collapsed" href="<?php; ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-users"></i>
          <span>Hak Akses</span>
        </a>
      </li> -->

            <!-- Heading -->
      <div class="sidebar-heading">
        Pengelolaan Pakar
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('gejala/list'); ?> "  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Gejala</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('kerusakan/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Kerusakan</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('penyebab/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Penyebab</span>
        </a>
      </li>

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('solusi/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Solusi</span>
        </a>
      </li>

       <!-- Heading -->
      <div class="sidebar-heading">
        Riwayat
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
<!--       <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-history"></i>
          <span>Riwayat</span>
        </a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <?php
    } elseif($this->session->userdata('role') == 2 ){
      ?>
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Beranda</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('dashboard'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-desktop"></i>
          <span>Beranda</span>
        </a>
      </li>
            <!-- Heading -->
      <div class="sidebar-heading">
        Pengelolaan Pakar
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('gejala/list'); ?> "  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Gejala</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('kerusakan/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Kerusakan</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('penyebab/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Penyebab</span>
        </a>
      </li>

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('solusi/list'); ?>"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Solusi</span>
        </a>
      </li>

       <!-- Heading -->
      <div class="sidebar-heading">
        Riwayat
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-history"></i>
          <span>Riwayat</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <?php
    }?>
   