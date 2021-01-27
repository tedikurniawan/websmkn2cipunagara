<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url() ?>">BERANDA</a></li>
                            <li>GURU</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>
    
<!-- Guru -->
<div class="about pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Halaman Guru</h2>
                    </div>
                </div>
            </div>
            <div class="row about_row">
                <?php foreach($guru as $key => $value) { ?>
                        <!-- Team Item -->
                        <div class="col-lg-3 col-md-6 team_col">
                            <div class="team_item">
                                <div class="team_image text-center"><img src="<?= base_url('foto_guru/'.$value->foto_guru)?>" alt=""></div>
                                <div class="team_body">
                                    <div class="team_title"><a href="#"><?= $value->nama_guru ?></a></div>
                                    <div class="team_subtitle">NIP : <?= $value->nip ?></div>
                                    <div class="team_subtitle"><?= $value->tempat_lahir ?>, <?= $value->tgl_lahir ?> </div>
                                </div>
                            </div>
                        </div>

                <?php } ?>
            </div>
        </div>
</div>