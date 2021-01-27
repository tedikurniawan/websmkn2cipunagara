<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url() ?>">BERANDA</a></li>
                            <li>SISWA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!-- Siswa -->
<div class="features pt-4">
    <div class="contact">
        <div class="">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 mt-3 text-center">
                        <h2>Halaman Siswa</h2>
                    </div>
                            <?php $no=1; foreach ($siswa as $key => $value) { ?>
                            <!-- Team Item -->
                            <div class="col-lg-3 col-md-6 team_col mt-5">
                                <div class="team_item">
                                    <div class="team_image text-center"><img src="<?= base_url('foto_siswa/'.$value->foto_siswa)?>" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#"><?= $value->nama_siswa ?></a></div>
                                        <div class="team_subtitle">NISN : <?= $value->nisn ?></div>
                                        <div class="team_subtitle"><?= $value->tempat_lahir ?>, <?= $value->tgl_lahir ?> </div>
                                        <div class="team_subtitle">NISN : <?= $value->kelas ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>