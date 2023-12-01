<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('calon-mahasiswa/layout/style.php') ?>
    <style>
        .position-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <?php $this->load->view('calon-mahasiswa/layout/header.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view('calon-mahasiswa/layout/sidebar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi mdi-home"></i>
                            </span>
                            Halaman Ujian Online
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
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body position-center">
                                    <h4 class="card-title">Ujian Online</h4> 
                                    <div>
                                        Selamat Anda telah menyelesaikan ujian saringan masuk online, klik tombol dibawah ini untuk melihat hasil ujian
                                    </div>
                                    <br>
                                    <a href="<?php echo base_url('nilai/lihat-nilai') ?>">
                                        <button class="btn btn-gradient-primary">Lihat Hasil Ujian Online</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- content-wrapper ends -->
                <?php $this->load->view('calon-mahasiswa/layout/footer.php') ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php $this->load->view('calon-mahasiswa/layout/js.php') ?>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>