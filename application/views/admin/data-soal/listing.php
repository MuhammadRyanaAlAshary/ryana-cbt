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
                            Tambah Soal
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
                                    <h4 class="card-title">Data Soal Test</h4>
                                    <a href="<?php echo base_url('admin/data-soal/form') ?>">
                                        <button class="btn btn-gradient-primary">+ Tambah Soal</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php $i = 0;
                        foreach ($data_soal as $key) { ?>
                            <div class="col-6 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Soal No <?php echo $i + 1; ?></h4>
                                        <p><?php echo $key->soal ?></p>
                                        <div style="float: right;">
                                            <a href="<?php echo base_url('admin/data-soal/edit/') ?><?php echo $key->id_soal ?>">
                                                <button class="btn btn-success">
                                                    <i class="mdi mdi-table-edit"></i>
                                                </button>
                                            </a>
                                            <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='<?php echo base_url('admin/deleteSoal/') ?><?php echo $key->id_soal; ?>' }">
                                                <button class="btn btn-danger">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;
                        } ?>
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