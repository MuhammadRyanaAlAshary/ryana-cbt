<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image" style="display: none;">
          <img src="<?php echo base_url() ?>assets/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">
            <?php echo substr($this->session->userdata('nama_lengkap'), 0, 10) ?>
          </span>
          <span class="text-secondary text-small">Calon Mahasiswa</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('ujian/test/mulai') ?>">
        <span class="menu-title">Soal Test</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('nilai/lihat-nilai') ?>">
        <span class="menu-title">Nilai</span>
        <i class="mdi mdi-account-settings menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('login/logoutCalon') ?>">
        <span class="menu-title">Logout</span>
        <i class="mdi mdi-logout menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>