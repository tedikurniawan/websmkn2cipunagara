<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home/galeri') ?>">GALERI</a></li>
                            <li>DETAIL GALERI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!-- Detail Galeri  -->
<div class="about pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title"><?= $nama_galeri->nama_galeri ?></h2>
                </div>
            </div>
        </div>
        <div class="row about_row">  
            <!-- Courses Sidebar -->
            <?php 
                foreach($galeri as $key => $value) { 
                ?>
                <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_left pb-4">
                        <div class="about_item">
                            <div class="about_item_image"><img height="215px" width="325px" src="<?= base_url('foto/'.$value->foto)?>" alt=""></div>
                            <div class="about_item_title" ><a href="#"><?= $value->ket_foto ?></a></div> 
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>