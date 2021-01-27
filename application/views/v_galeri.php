<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url() ?>">BERANDA</a></li>
                            <li>GALERI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!--  Galeri -->
<div class="about pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri Foto SMKN 2 Cipunagara</h2>
                </div>
            </div>
        </div>
        <div class="row about_row">
    
            <!-- Courses Sidebar -->
            <?php 
                foreach($galeri as $key => $value) { 
                ?>
                <!-- About Item -->
                    <div class="col-lg-4 about_col">
                        <div class="about_item">
                            <div class="about_item_image"><img height="215px" width="325px" src="<?= base_url('sampul/'.$value->sampul)?>" alt=""></div>
                            <div class="about_item_title" ><a href="<?= base_url('home/detail_galeri/'.$value->id_galeri)?>"><?= $value->nama_galeri ?></a></div>
                            <div class="about_item_text">
                                <p><i class="fa fa-image"></i> <?= $value->jml_foto ?> Foto</p>
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>
