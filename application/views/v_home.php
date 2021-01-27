<!-- Home -->
<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="<?= base_url() ?>">BERANDA</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
	
<!-- Beranda -->

<div class="features">
		<div class="container">
			<div class="row">
				<div class="col mt-5">
					<div class="section_title_container text-center">

						<div class="section_logo"><img class="mb-2 " src="<?=base_url()?>template/back-end/images/logo-smkn2cipunagara.png" height="150px" width="150px"></div>
						<br>
						<h4 class="section_title">SELAMAT DATANG DI WEBSITE</h4>
						<br>
						<h1 class="logo_text">SMK NEGERI 2</h1>
						<br>
						<br>
						<h1 class="logo_text">CIPUNAGARA</h1>
						<!-- <div class="section_subtitle"><p>INGELMU PINASTI KERTARAHARJA</p></div> -->
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<!-- <div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?=base_url()?>template/front-end/images/icon_1.png" alt=""></div>
						<h3 class="feature_title">The Experts</h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
					</div>
				</div> -->

				<!-- Features Item -->
				<!-- <div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?=base_url()?>template/front-end/images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Book & Library</h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
					</div>
				</div> -->

				<!-- Features Item -->
				<!-- <div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?=base_url()?>template/front-end/images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Best Courses</h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
					</div>
				</div> -->

				<!-- Features Item -->
				<!-- <div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?=base_url()?>template/front-end/images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
					</div>
				</div> -->

			</div>
		</div>
</div>


<!-- Berita -->

<div class="courses">
	<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url()?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Berita Sekolah</h2>
					<div class="section_subtitle"><p>Berita harian seputar kegiatan/event dan prestasi civitas SMKN 2 Cipunagara </p></div>
				</div>
			</div>
		</div>
		<div class="row courses_row">
			
	
			<?php foreach ($berita as $key => $value) { ?>
			<div class="col-lg-4 course_col">
				<div class="course">
					<div class="course_image"><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt=""></div>
					<div class="course_body">
						<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 25) ?>...</a></h3>
						<div class="course_teacher"> <?= $value->nama_user ?></div>
						<div class="course_text">
							<p><?= substr(strip_tags($value->isi_berita), 0, 85) ?>...</p>
						</div>
					</div>
					<div class="course_footer">
						<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
							<div class="course_info">
							<i class="fa fa-calendar" aria-hidden="true"></i>
										<span> <?= $value->tgl_berita ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

		

		</div>
		<div class="row">
			<div class="col">
				<div class="courses_button trans_200"><a href="<?= base_url('/home/berita') ?>">Lihat Semua Berita</a></div>
			</div>
		</div>
	</div>
</div>


<!-- Guru -->

<div class="team">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Guru SMKN 2 Cipunagara</h2>
					<div class="section_subtitle"><p></p></div>
				</div>
			</div>
		</div>
		<div class="row team_row">
			
			<?php foreach($guru as $key => $value) { ?>
			<div class="col-lg-3 col-md-6 team_col mt-5">
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
			<div class="col">
				<div class="courses_button trans_200"><a href="<?= base_url('/home/guru') ?>">Lihat Semua Guru</a></div>
			</div>
		</div>
	</div>
</div>

<!-- Galeri -->
<div class="events">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Galeri</h2>
					<div class="section_subtitle"><p>Galeri dari kegiatan pembelajaran atau kegiatan lainnya di SMKN 2 Cipunagara </p></div>
					<div class="section_subtitle"><p></p></div>
				</div>
			</div>
		</div>
		<div class="row events_row">
			<?php
				foreach($galeri_home as $key => $value) { 
			?>
			<div class="col-lg-4 event_col">
				<div class="event event_left">
					<div class="event_image"><img height="215px" width="325px" src="<?= base_url('sampul/'.$value->sampul)?>" alt=""></div>
					<div class="event_body d-flex flex-row align-items-start justify-content-start">
						<div class="event_content">
							<div class="event_title"><a href="<?= base_url('home/detail_galeri/'.$value->id_galeri)?>"><?= $value->nama_galeri ?></a></div>
							<div class="event_info_container">

								<div class="event_text">
									<p><i class="fa fa-image"></i> <?= $value->jml_foto ?> Foto</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('/home/galeri') ?>">Lihat Semua Galeri</a></div>
				</div>
			</div>
	</div>
</div>

<!-- Pengumuman -->

<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url()?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Pengumuman</h2>
						<div class="section_subtitle"><p>Pengumuman mengenai informasi kegiatan pembelajaran atau kegiatan lainnya di SMKN 2 Cipunagara </p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
		
				<?php foreach ($pengumuman_home as $key => $value) { ?>
				<div class="col-lg-6 course_col">
					<div class="course">
						<div class="course_body">
							<h3 class="course_title"><?= $value->judul_pengumuman ?></h3>
							<div class="course_text">
								<p><?= $value->isi_pengumuman ?></p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
								<i class="fa fa-calendar" aria-hidden="true"></i>
											<span> <?= $value->tgl ?></span>
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