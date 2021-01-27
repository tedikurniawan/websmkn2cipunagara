<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?= base_url('home/berita') ?>">BERITA</a></li>
                            <li>DETAIL BERITA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!-- Detail Berita -->
<div class="courses pt-5">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
				    <h2>Detail Berita</h2>
					<div class="courses_container">
						<div class="row courses_row">
							
                            <!-- Blog Content -->
                            <div class="col-lg-12">
                                <div class="blog_content">
                                    <div class="blog_title"><?= $berita->judul_berita ?></div>
                                    <div class="blog_meta">
                                        <ul>
                                            <li>Post <?= $berita->tgl_berita ?></li>
                                            <li>By <?= $berita->nama_user ?></div></li>
                                        </ul>
                                    </div>
                                    <div class="blog_image"><img  src="<?= base_url('gambar_berita/'.$berita->gambar_berita) ?>" alt=""></div>
                                    <p><?= $berita->isi_berita ?></p>
                                    <div class="blog_images">
                                        <div class="row">
                                            <div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_1.jpg" alt=""></div></div>
                                            <div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_2.jpg" alt=""></div></div>
                                        </div>
                                    </div>
                                </div>
						    </div>
                        </div>
					</div>
               

                        <!-- Courses Sidebar -->
                        <div class="col-lg-4">
                            <div class="sidebar_left">

                            	<!-- Latest Course -->
                                <div class="sidebar_section">
                                    <div class="sidebar_section_title">Berita Terakhir</div>
                                    <div class="sidebar_latest">
                                        <?php foreach ($berita_terakhir as $key => $value) { ?>
                                        <!-- Latest Course -->
                                        <div class="latest d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_image"><div><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt=""></div></div>
                                            <div class="latest_content">
                                                <div class="latest_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25) ?>...</a></div>
                                                <div class="latest_price"><?= $value->tgl_berita ?></div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>

                                
                            </div>
                        </div>
                </div>
                      
			</div>
		</div>
    </div>
</div>


<