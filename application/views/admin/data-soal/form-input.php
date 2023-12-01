<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/layout/style.php') ?>
</head>
<?php
$id_soal = "";
$soal = "";
$jawaban = "";
$type_soal = "";
if (isset($data_soal)) {
    $id_soal = $data_soal->id_soal;
    $soal = $data_soal->soal;
    $jawaban = $data_soal->jawaban;
    $type_soal = $data_soal->type_soal;
}
?>
<?php
$pilihan_a = "";
$pilihan_b = "";
$pilihan_c = "";
$pilihan_d = "";
$pilihan_e = "";
if (isset($data_pilihan_jawaban)) {
    $pilihan_a = $data_pilihan_jawaban->pilihan_a;
    $pilihan_b = $data_pilihan_jawaban->pilihan_b;
    $pilihan_c = $data_pilihan_jawaban->pilihan_c;
    $pilihan_d = $data_pilihan_jawaban->pilihan_d;
    $pilihan_e = $data_pilihan_jawaban->pilihan_e;
}
?>

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
                            <?php if (isset($data_soal)) {
                                echo 'Edit Data Soal';
                            } else {
                                echo 'Tambah Soal';
                            } ?>
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
                                    <h4 class="card-title" style="text-align: center;">

                                        <?php if (isset($data_soal)) {
                                            echo 'Form Edit Data Soal';
                                        } else {
                                            echo 'Form Tambah Soal';
                                        } ?>
                                    </h4>
                                    <div style="margin-top: 50px;">
                                        <form <?php if (isset($data_soal)) { ?> action="<?php echo base_url('admin/updateSoal/') ?><?php echo $id_soal ?>" <?php } else { ?> action="<?php echo base_url('admin/addSoal') ?>" <?php } ?> method="post">
                                            <?php if (isset($data_soal)) { ?>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">ID Soal Test</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="id_soal" readonly value="<?php echo $id_soal ?>">
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">ID Soal Test</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="id_soal" readonly value="<?php echo $total_soal->TOTAL_SOAL ?>">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Soal Test</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="soal" rows="10"><?php echo $soal ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Type Soal</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="type_soal">
                                                        <?php foreach ($data_type as $type_soal) { ?>
                                                            <option value="<?php echo $type_soal->type_soal ?>">
                                                                <?php echo $type_soal->type_soal ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pilihan A</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="pilihan_a" rows="5"><?php echo $pilihan_a ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pilihan B</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="pilihan_b" rows="5"><?php echo $pilihan_b ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pilihan C</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="pilihan_c" rows="5"><?php echo $pilihan_c ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pilihan D</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="pilihan_d" rows="5"><?php echo $pilihan_d ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pilihan E</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="pilihan_e" rows="5"><?php echo $pilihan_e ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Jawaban</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="jawaban">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="float: right;">
                                                <button type="submit" class="btn btn-gradient-primary mb-2">
                                                    <?php if (isset($data_soal)) {
                                                        echo 'Simpan Perubahan';
                                                    } else {
                                                        echo 'Simpan';
                                                    } ?>
                                                </button>
                                            </div>
                                        </form>
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