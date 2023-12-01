<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/layout/style.php') ?>
</head>
<?php
$id_calon_mahasiswa = "";
$password = "";
$nama_lengkap = "";
$jenis_kelamin = "";
$id_jurusan = "";
$alamat = "";
$asal_sekolah = "";
if (isset($calon_mhs)) {
    $id_calon_mahasiswa = $calon_mhs->id_calon_mahasiswa;
    $password = $calon_mhs->password;
    $nama_lengkap = $calon_mhs->nama_lengkap;
    $jenis_kelamin = $calon_mhs->jenis_kelamin;
    $id_jurusan = $calon_mhs->id_jurusan;
    $alamat = $calon_mhs->alamat;
    $asal_sekolah = $calon_mhs->asal_sekolah;
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
                            <?php if (isset($calon_mhs)) {
                                echo 'Edit Data Calon Mahasiswa';
                            } else {
                                echo 'Tambah Calon Mahasiswa';
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
                                    <h4 class="card-title" style="text-align: center;">Form Biodata Calon Mahasiswa</h4>
                                    <div style="margin-top: 50px;">
                                        <form <?php if (isset($calon_mhs)) { ?> action="<?php echo base_url('admin/updateCalonMahasiswa/') ?><?php echo $id_calon_mahasiswa ?>" <?php } else { ?> action="<?php echo base_url('admin/addCalonMahasiswa') ?>" <?php } ?> method="post">
                                            <?php if (isset($calon_mhs)) { ?>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">ID Login</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="id_calon_mahasiswa" value="<?php echo $id_calon_mahasiswa ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="password" value="<?php echo $password ?>">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nama_lengkap ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="l">
                                                            Laki-laki
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="p">
                                                            Perempuan
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Jurusan</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="id_jurusan">
                                                        <?php foreach($jurusan as $key ) { ?>
                                                            <option value="<?php echo $key->id_jurusan ?>"><?php echo $key->nama_jurusan ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="alamat" rows="5"><?php echo $alamat ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="asal_sekolah" value="<?php echo $asal_sekolah ?>">
                                                </div>
                                            </div>
                                            <div style="float: right;">
                                                <button type="submit" class="btn btn-gradient-primary mb-2">
                                                    <?php if (isset($calon_mhs)) {
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