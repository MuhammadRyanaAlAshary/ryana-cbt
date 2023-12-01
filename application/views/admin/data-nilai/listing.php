<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/layout/style.php') ?>
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
                            Calon Mahasiswa
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
                                <div class="card-body">
                                    <h4 class="card-title">Data Calon Mahasiswa</h4>  
                                    <p>Calon mahasiswa yang telah melakukan ujian</p>
                                    <div class="table-responsive" style="margin-top: 20px;">
                                        <table class="table table-striped table-bordered" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        ID Login
                                                    </th>
                                                    <th>
                                                        Nama
                                                    </th>
                                                    <th>
                                                        Jenis Kelamin
                                                    </th>
                                                    <th>
                                                        Jurusan
                                                    </th> 
                                                    <th>
                                                        Print Nilai
                                                    </th>  
                                                    <th style="display: none;">
                                                        Hapus
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($calon_mhs_ujian as $key) {  ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $key->id_calon_mahasiswa ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $key->nama_lengkap ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($key->jenis_kelamin === 'l') {
                                                                echo 'Laki-laki';
                                                            } else {
                                                                echo 'Perempuan';
                                                            } ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $key->nama_jurusan ?>
                                                        </td>  
                                                        <td>
                                                            <a href="<?php echo base_url('admin/laporanNilaiSiswa/') ?><?php echo $key->id_calon_mahasiswa ?>" target="_blank">
                                                                <button class="btn btn-primary">
                                                                    <i class="mdi mdi-cloud-print"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                        <td style="display: none;">
                                                            <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='<?php echo base_url('admin/deleteCalonMahasiswa/') ?><?php echo $key->id_calon_mahasiswa; ?>' }">
                                                                <button class="btn btn-danger">
                                                                    <i class="mdi mdi-delete-forever"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
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