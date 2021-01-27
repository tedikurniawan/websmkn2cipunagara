		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?= base_url() ?>">
									<div class="logo_text">
										<img class="mb-1 mr-1" src="<?=base_url()?>template/back-end/images/logo-smkn2cipunagara.png" height="55px" width="55px">
										<small><b>SMKN 2 CIPUNAGARA</b></small>
									</div>
								</a>
							</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li><a href="<?= base_url() ?>">Beranda</a></li>
										<li><a href="<?= base_url('home/guru') ?>">Guru</a></li>
										<li><a href="<?= base_url('home/siswa') ?>">Siswa</a></li>
										<li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
										<li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
										<li><a href="<?= base_url('home/kontak') ?>">Kontak</a></li>
										<!-- <li>
											<a class="btn btn-sm btn-info text-white btn-block" href="<?=base_url('login')?>"><small><i class="fa fa-sign-in" aria-hidden="true"></i> <b>LOGIN</b><small></a>
										</li> -->
									</ul>

													<!-- Hamburger -->
													<div class="hamburger menu_mm">
														<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Search Panel -->
		<!-- <div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			 -->
    </header>
    <!-- Menu -->
	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<!-- <div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div> -->
		<nav class="menu_nav">
			<ul class="menu_mm">
			<li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
				<li><a href="<?= base_url('home/guru') ?>">Guru</a></li>
				<li><a href="<?= base_url('home/siswa') ?>">Siswa</a></li>
				<li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
				<li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
				<li><a href="<?= base_url('home/kontak') ?>">Kontak</a></li>
				<li>
					<div class="top_bar_login ml-auto">
						<a class="btn btn-sm btn-info text-white btn-block" href="<?=base_url('login')?>"><small><i class="fa fa-sign-in" aria-hidden="true"></i> <b>LOGIN ADMIN</b><small></a>
					</div>
				</li>
			</ul>
		</nav>
	</div>