<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/layout/style.php') ?>
  <style>
    .no_underline:hover {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <?php $this->load->view('admin/layout/header.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php $this->load->view('admin/layout/sidebar.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
              Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <a href="<?php echo base_url('admin/calon-mahasiswa') ?>" class="text-white no_underline">
                  <div class="card-body">
                    <img src="<?php echo base_url() ?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><?php echo date("d M Y") ?>
                      <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Data Calon</h2>
                    <h6 class="card-text"><?php echo $calon_mahasiswa->TOTAL_CALON_MAHASISWA ?> Calon Mahasiswa</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <a href="<?php echo base_url('admin/data-soal') ?>" class="text-white no_underline">
                  <div class="card-body">
                    <img src="<?php echo base_url() ?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Bank Soal
                      <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Data Soal</h2>
                    <h6 class="card-text"><?php echo $data_soal->TOTAL_SOAL ?> Total Soal</h6>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <a href="<?php echo base_url('admin/data-nilai') ?>" class="text-white no_underline">
                  <div class="card-body">
                    <img src="<?php echo base_url() ?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Laporan Nilai
                      <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Data Nilai</h2>
                    <h6 class="card-text">Nilai Seluruh Calon</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php $this->load->view('admin/layout/footer.php') ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <?php $this->load->view('admin/layout/js.php') ?>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>