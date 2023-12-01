<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('calon-mahasiswa/layout/style.php') ?>
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
                                <div class="card-body">
                                    <div style="display: flex; align-items: center; justify-content: space-between; ">
                                        <h4 class="card-title">Soal No : <?php echo $data_soal->id_soal ?></h4>
                                        <div>
                                            <div id="some_div" style="color: green;"></div>
                                        </div>
                                    </div>
                                    <div>
                                        Type Soal : <strong><?php echo $data_soal->type_soal ?></strong> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <?php echo $data_soal->soal ?>
                                    </div>
                                    <br>
                                    <form action="<?php echo base_url('mahasiswa/addJawaban') ?>" method="post">
                                        <div class="form-group row">
                                            <input type="hidden" value="<?php echo $data_soal->id_soal ?>" name="id_soal" id="id_soal">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="jawaban" value="A">
                                                        <?php echo $data_jabawan->pilihan_a ?>
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input required type="radio" class="form-check-input" name="jawaban" value="B">
                                                        <?php echo $data_jabawan->pilihan_b ?>
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input required type="radio" class="form-check-input" name="jawaban" value="C">
                                                        <?php echo $data_jabawan->pilihan_c ?>
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input required type="radio" class="form-check-input" name="jawaban" value="D">
                                                        <?php echo $data_jabawan->pilihan_d ?>
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input required type="radio" class="form-check-input" name="jawaban" value="E">
                                                        <?php echo $data_jabawan->pilihan_e ?>
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <!-- <a onclick="if(confirm('Apakah anda yakin dengan jawaban Anda ?')){ location.href='<?php echo base_url('ujian/halaman-test/') ?>' }"> -->
                                                        <button class="btn btn-gradient-primary">Submit</button>
                                                    <!-- </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
        var timeLeft = 60;
        var elem = document.getElementById('some_div');
        var timerId = setInterval(countdown, 1000);

        function countdown() {
            if (timeLeft == -1) {
                clearTimeout(timerId);
                doSomething();
            } else {
                elem.innerHTML = timeLeft + ' Detik Lagi';
                timeLeft--;
            }
        }

        function doSomething() {
            let id_soal = document.getElementById("id_soal").value;
            let post_url = "http://localhost/ryana-cbt/mahasiswa/addFalseJawaban/" + id_soal;
            // alert(post_url)
            window.location.href = post_url;
        }
    </script> 
</body>

</html>