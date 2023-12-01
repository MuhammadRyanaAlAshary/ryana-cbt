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
                            Halaman Nilai
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
                                    <h4 class="card-title">Hasil Nilai Ujian Online</h4>
                                    <?php if ($data_nilai->status_test == 'true') { ?>
                                        <div>
                                            Terimakasih sudah mengikuti Ujian Saringan Masuk Online Universitas Langlangbuana. <br>
                                            Dibawah ini adalah nilai hasil ujian online Anda
                                        </div>
                                    <?php } else { ?>
                                        <div>
                                            <p>
                                                Anda belum melakukan Ujian Saringan Masuk Online. <br>
                                                Silakan lakukan ujian terlebih dahulu.
                                            </p>
                                            <a href="<?php echo base_url('ujian/test/mulai') ?>">
                                                <button class="btn btn-gradient-primary">Mulai Ujian Sekarang</button>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($data_nilai->status_test == 'true') { ?>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Rekapitulasi Ujian</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Total Soal</p>
                                            </div>
                                            <div class="col-4">
                                                <p><?php echo $all_soal_count->TOTAL_SOAL ?> Soal</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Jawaban Benar</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="color: green;"><?php echo $nilai_count_benar->TOTAL_JAWABAN_BENAR ?> Jawaban</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Jawaban Salah</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="color: red;"><?php echo $nilai_count_salah->TOTAL_JAWABAN_SALAH ?> Jawaban</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Nilai</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="color: blue;">
                                                    <!-- 50 Point -->
                                                    <?php
                                                    $persen = 100;
                                                    $total = $all_soal_count->TOTAL_SOAL;
                                                    $point = $persen / $total;
                                                    $nilai = $point * $nilai_count_benar->TOTAL_JAWABAN_BENAR;
                                                    $nilai_akhir = $nilai / $persen;
                                                    $nilai_fix = $nilai_akhir * $persen;
                                                    echo (floor($nilai_fix));
                                                    ?>
                                                    Point
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <a href="<?php echo base_url('mahasiswa/laporanNilaiSiswa') ?>" target="_blank">
                                                    <button class="btn btn-gradient-primary">Cetak Rekapitulasi</button>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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