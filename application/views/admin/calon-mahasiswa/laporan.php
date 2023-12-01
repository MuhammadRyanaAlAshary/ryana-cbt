<head>
    <?php $this->load->view('admin/layout/style.php') ?>
</head>
<!-- onload="window.print()" -->

<body onload="window.print()">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-responsive" style="margin-top: 40px;">
                    <h3 style="text-align: center; margin-bottom: 20px; display:none;">Data Laporan Seluruh Calon Mahasiswa</h3>
                    <div class="row">
                        <?php foreach ($calon_mhs as $key) {  ?>
                            <div class="col-6">
                                <div style="padding: 20px; border: 1px solid #000; margin-top: 10px;">
                                    <div style="display: flex;">
                                        <div>
                                            <img src="<?php echo base_url('assets/images/Logo.jpg') ?>" style="width: 50px;" />
                                        </div>
                                        <div style="text-align: center; margin-left: 100px;">
                                            <p>KARTU PESERTA UBK</p>
                                            <p>UJIAN BERBASIS KOMPUTER</p>
                                        </div>
                                    </div>
                                    <div style="padding-top: 10px; border-top: 1px solid #000;">
                                        <div style="display: flex; margin-top: 10px;">
                                            <p style="width: 150px;">Nama</p>
                                            <b><?php echo $key->nama_lengkap ?></b>
                                        </div>
                                        <div style="display: flex;">
                                            <p style="width: 150px;">Jurusan</p>
                                            <b><?php echo $key->nama_jurusan ?></b>
                                        </div>
                                        <div style="display: flex;">
                                            <p style="width: 150px;">Username</p>
                                            <b><?php echo $key->id_calon_mahasiswa ?></b>
                                        </div>
                                        <div style="display: flex;">
                                            <p style="width: 150px;">Password</p>
                                            <b><?php echo $key->password ?></b>
                                        </div>
                                        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                                            <div>
                                                <div style="border: 1px solid #000; padding: 10px 5px;">
                                                    <img src="<?php echo base_url('assets/images/default-avatar_man.png') ?>" style="width: 100px;" />
                                                </div>
                                            </div>
                                            <div style="text-align: center;">
                                                <p>Universitas Langlangbuana</p>
                                                <div style="padding-top: 50px;">
                                                    <b>Ttd,</b>
                                                </div>
                                                <p>Bpk Yiyi Supendi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>