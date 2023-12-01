<head>
    <?php $this->load->view('admin/layout/style.php') ?>
    <style>
        .box-shadow-grup {
            box-shadow: 1px 1px 5px 1px #888888;
            border-radius: 10px;
        }

        .row-margin-top {
            margin-top: 50px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row row-margin-top">
            <div class="col">
                <div class="card-body box-shadow-grup">
                    <h4 class="card-title text-center">Hasil Ujian</h4>
                    <div class="row">
                        <div class="col-3">
                            <p>Nama Lengkap</p>
                        </div>
                        <div class="col">
                            <p>: <?php echo $data_laporan->nama_lengkap ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>Jurusan</p>
                        </div>
                        <div class="col">
                            <p>: <?php echo $data_laporan->nama_jurusan ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>Alamat</p>
                        </div>
                        <div class="col">
                            <p>: <?php echo $data_laporan->alamat ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>Nilai</p>
                        </div>
                        <div class="col">
                            <p style="color: blue;"> :
                                <?php
                                $persen = 100;
                                $total = $all_soal_count->TOTAL_SOAL;
                                $point = $persen / $total;
                                $nilai = $point * $nilai_count_benar->TOTAL_JAWABAN_BENAR;
                                $nilai_akhir = $nilai / $persen;
                                $nilai_fix = $nilai_akhir * $persen;
                                echo(floor($nilai_fix));
                                ?>
                                Point
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>Status</p>
                        </div>
                        <div class="col">
                            <p>:
                                <?php
                                $persen = 100;
                                $total = $all_soal_count->TOTAL_SOAL;
                                $point = $persen / $total;
                                $nilai = $point * $nilai_count_benar->TOTAL_JAWABAN_BENAR;
                                $nilai_akhir = $nilai / $persen;
                                $hasil_akhir = $nilai_akhir * $persen;
                                if ($hasil_akhir < 50) {
                                    echo '<label class="badge badge-gradient-danger">Tidak Lulus</label>';
                                } else {
                                    echo '<label class="badge badge-gradient-success">Lulus</label>';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <button class="btn btn-primary" onclick="printLaporan()">
                                <i class="mdi mdi-cloud-print"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printLaporan() {
            window.print();
        }
    </script>
</body>