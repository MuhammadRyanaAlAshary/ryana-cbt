<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image" style="display: none;">
                <img src="<?php echo base_url() ?>assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">
                  <?php echo substr($this->session->userdata('fullname'), 0, 10) ?>
                </span>
                <span class="text-secondary text-small">Super Admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/calon-mahasiswa') ?>">
              <span class="menu-title">Data Calon Mahasiswa</span>
              <i class="mdi mdi-account-settings menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/data-soal') ?>">
              <span class="menu-title">Data Soal</span>
              <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/data-nilai') ?>">
              <span class="menu-title">Data Nilai</span>
              <i class="mdi mdi-access-point-network menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
              <span class="menu-title">Logout</span>
              <i class="mdi mdi-logout menu-icon"></i>
            </a>
          </li> 
        </ul>
      </nav>