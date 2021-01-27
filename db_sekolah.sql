-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2020 pada 16.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(50) DEFAULT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'Dies Natalis Ke-20, Ini Harapan dan Tekad Kepala SMAN 1 Haurgeulis', 'dies-natalis-ke-20-ini-harapan-dan-tekad-kepala-sman-1-haurgeulis', '<p>&nbsp;</p>\r\n\r\n<h3><strong>Dies Natalis Ke-20, Ini Harapan dan Tekad Kepala SMAN 1 Haurgeulis</strong></h3>\r\n\r\n<p>Dies Natalis ke-20 SMAN 1 Haurgeulis dimeriahkan sejumlah kegiatan sejak Sabtu (2/3/2019). Di antaranya pentas seni dan puncaknya dilaksanakan kegiatan karnaval serta jalan sehat yang dilaksanakan Senin (4/3/2019).</p>\r\n\r\n<p>Kepala SMAN 1 Haurgeulis Indramayu, Ambar Triwidodo mengatakan, kegiatan pentas seni dalam rangka memberikan ruang kepada para pelajar untuk aktualisasi diri di bidang kesenian.</p>\r\n\r\n<p>&ldquo;Masing-masing pelajar bisa mengapresiasikan dalam berbagai kegiatan, seperti lomba bahasa Inggris, tari, teater dan sebagainya,&rdquo; tuturnya.</p>\r\n\r\n<p>Beliau menambahkan, dirinya cukup bersyukur karena selama 20 tahun berdiri sudah banyak prestasi yang berhasil diraih oleh SMAN 1 Haurgeulis. &ldquo;Kami memiliki harapan dan cita-cita menjadikan SMAN 1 Haurgeulis ini sebagai SMA juara,&rdquo; ungkapnya.</p>\r\n\r\n<p>Selain ingin membawa SMAN 1 Haurgeulis berprestasi secara akademik, beliau juga bertekad menjadikan sekolah yang dipimpinnya jadi sekolah percontohan dalam pembentukan karakter siswa.</p>\r\n', 'Dies-Natalis-SMAN-1-Haurgeulis-Nanang.jpg', '2020-06-03 04:04:00', 1),
(5, 'Berbagi Ketangguhan di SMAN 1 Haurgeulis', 'berbagi-ketangguhan-di-sman-1-haurgeulis', '<p>&nbsp;</p>\r\n\r\n<h3><strong>Berbagi Ketangguhan di SMAN 1 Haurgeulis</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;<em>Dulu ketika saya sekolah, ada materi PMP (Pendidikan Moral Pancasila), kalau sekarang PKN (Pendidikan Kewarganegaraan), dan saya tidak pernah masuk. Tapi perlu adik-adik ketahui, empat tahun terakhir ini saya mengajar PKN</em>&rdquo;</p>\r\n\r\n<p>Pernyataan itu disampaikan Iswanto, salah seorang yang pernah terlibat dalam kelompok ekstremisme, di hadapan siswa-siswi Sekolah Menengah Atas Negeri (SMAN) 1 Haurgeulis, Indramayu, Rabu (28/9). Kegiatan dialog interaktif bertema &ldquo;Belajar Bersama Menjadi Generasi Tangguh&rdquo; itu digelar oleh Aliansi Indonesia Damai (AIDA) dan didukung oleh Direktorat Pembinaan SMA Kementerian Pendidikan dan Kebudayaan.</p>\r\n\r\n<figure class=\"easyimage easyimage-side\"><img alt=\"\" src=\"blob:http://localhost/5f10d9a9-2490-4140-9630-7e0f794aca7b\" width=\"800\" />​\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Iswanto berbagi pengalamannya saat masih bergabung dalam jaringan terorisme. Ia mengaku mendapatkan ilmu militer dari kelompok tersebut, seperti tata cara menggunakan senjata api, merakit bom serta strategi dan taktik perang. Ilmu yang ia dapatkan, ia praktikan dengan melibatkan diri pada sejumlah konflik komunal. Ia pun berpandangan bahwa pemerintah Indonesia harus diperangi, karena tidak sesuai dengan ajaran agama.</p>\r\n\r\n<p>Namun demikian, pasca penangkapan pelaku Bom Bali I pada tahun 2002 yang di antara pelakunya adalah guru-gurunya, maka perlahan terjadi kegamangan dalam diri Iswanto. Salah satu gurunya, Ali Imron, yang divonis penjara seumur hidup memintanya untuk tidak melanjutkan aksi-aksi kekerasan. Sementara sebagian guru yang lain justru memintanya untuk melanjutkan tindakan kekerasan.&nbsp;</p>\r\n\r\n<p>Di tengah-tengah kegalauan itu, Iswanto memilih melanjutkan sekolah dan tidak melanjutkan aksi-aksi kekerasan. &ldquo;Inspirasi saya keluar dari jaringan ini, saya sekolah lagi. Saya ikuti ujian persamaan untuk mendapat ijazah SMA, kemudian saya lanjut ambil S1 dan S2,&rdquo; kenangnya.</p>\r\n\r\n<p>Kini Iswanto memilih keluar dari kelompok ekstrem. Meskipun tidak terlibat dalam aksi pengeboman, ia meminta maaf kepada para korban ledakan,&nbsp;termasuk kepada Hayati Eka Laksmi yang turut menjadi narasumber dalam dialog itu. Eka sendiri merupakan korban Bom Bali tahun 2002. Ia kehilangan seorang suami, Imawan Sardjono, karena menjadi korban meninggal dari peristiwa ledakan dahsyat tujuh belas tahun lalu itu.</p>\r\n\r\n<p>Saat menceritakan kisahnya, Eka mengatakan, bahwa kehilangan suami menjadi pukulan batin bagi dirinya. Apalagi saat itu, ia tidak bekerja karena fokus membesarkan dua orang anak yang masih kecil. Namun, keadaan tak bisa ia tolak. Tulang punggung keluarga secara otomatis berpindah kepadanya. Di balik segala kepedihan itu Eka mencoba menguatkan dari dan jiwanya.&nbsp;</p>\r\n\r\n<p>Ia sadar bahwa kehidupan dua buah hatinya harus terus berlanjut. Karena itu, ia berusaha semaksimal mungkin untuk mencari nafkah bagi keluarganya. &ldquo;Saat mengantarkan lamaran kerja. Saya menangis di atas motor. Teriak-teriak. Itu karena saya harus kuat di depan anak-anak,&rdquo; ungkap Guru di salah satu sekolah swasta di Bali tersebut.</p>\r\n\r\n<p>Saat ini, Eka telah bangkit dari berbagai keterpurukan masa lalunya. Selain menjadi guru konseling di sekolah swasta, Eka pun ikut mendirikanYayasan Isana Dewata, perkumpulan istri, suami dan anak korban Bom Bali. Bagi Eka dan sejumlah rekan-rekannya sesama korban, organisasi tersebut adalah wadah untuk saling menguatkan untuk menjalani hidup di masa depan. Eka juga bergabung dalam tim perdamaian AIDA untuk mengampanyekan perdamaian di kalangan generasi muda Indonesia.</p>\r\n\r\n<p>Ia pun berharap tidak ada lagi korban bom di masa depan, karena menjadi korban sungguh penderitaan luar biasa. Kehidupan dengan perdamaian menurutnya adalah anugerah yang harus terus menerus diperjuangkan. &ldquo;Cukuplah kami yang menjadi korban. Cukuplah anak-anak saya yang kehilangan bapaknya. Hidup akan lebih nikmat dan berarti bila kita damai,&rdquo; pesan Eka sebelum mengakhiri kisahnya.</p>\r\n\r\n<p>Direktur AIDA, Hasibullah Satrawi mengatakan, makna generasi tangguh yang bisa dipetik dari kisah Iswanto dan Eka adalah orang-orang yang mau mengakui kesalahan dan mau memperbaiki diri, dan mereka yang mampu bangkit dari keterpurukan dan mengubahnya menjadi inspirasi bagi orang lain. &ldquo;Semua orang pernah menangis, namun kita belajar dari Ibu Eka bahwa kesedihan tidak harus membuat kita hancur. Namun kesedihan justru membuat kita tangguh dengan bangkit dan memperbaiki keadaan,&rdquo; pungkas Hasibullah.</p>\r\n', 'AIDA-Berbagi-Ketangguhan-di-SMAN-1-Haurgeulis-.jpg', '2020-06-03 04:20:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(20) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `file` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_foto`
--

INSERT INTO `tb_foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(11, 3, 'Olahraga Futsal', 'Olahraga.jpg'),
(13, 5, 'Kreasi Siswa', 'HUT-RI.jpg'),
(15, 2, 'Pemilihan', 'PILKAOS1.jpg'),
(16, 1, 'Upacara Bendera', 'Upacara1.jpg'),
(17, 6, 'Lab. Komputer', 'bonroe-5.jpg'),
(18, 4, 'Foto Bersama', 'bonroe-6.jpg'),
(19, 4, 'Jajaran Guru', 'bonroe-3.jpg'),
(20, 1, 'Upacara Bendera Hari Senin', 'bonroe-4.jpg'),
(21, 2, 'Pelantikan OSIS', 'bonroe-2.jpg'),
(22, 3, 'Tarik Tambang Antar Kelas', 'bonroe-7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `nama_galeri`, `sampul`) VALUES
(1, 'Upacara Bendera', 'bonroe-4.jpg'),
(2, 'Pelantikan OSIS', 'bonroe-2.jpg'),
(3, 'Kegiatan Olahraga', 'bonroe-7.jpg'),
(4, 'Jajaran Guru', 'bonroe-3.jpg'),
(5, 'HUT RI Ke-74', 'HUT-RI.jpg'),
(6, 'KBM', 'bonroe-5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(15) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` varchar(30) DEFAULT NULL,
  `id_mapel` varchar(10) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `foto_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(6, '-', 'TEDY TARUDIN', 'INDRAMAYU', '27 MEI 1992', 'PJO032', 'S1', 'TEDY_TARUDIN.jpg'),
(7, '-', 'FITRIYAH', 'INDRAMAYU', '12 JUNI 1987', 'MTK173', 'S1', 'FITRIYAH.jpg'),
(8, '197512222009021001', 'AMI PRIYONO', 'BREBES', '22 DESEMBER 1975', 'BIG153', 'S1', 'AMI_PRIYONO.jpg'),
(9, '-', 'TIARA RACHMAWATI SYAIR', 'INDRAMAYU', '01 OKTOBER 1984', 'BLG103', 'S1', 'TIARA_RACHMAWATI_SYAIR.jpg'),
(10, '198112262009022001', 'DHIAN SUSANTY', 'INDRAMAYU', '26 DESEMBER 1981', 'EKN112', 'S1', 'DHIAN_SUSANTY.jpg'),
(11, '196802052008012007', 'MUMUN MUNAEHA', 'INDRAMAYU', '05 FEBRUARI 1968', 'KMA203', 'S2', 'MUMUN_MUNAEHA.jpg'),
(12, '197302252008011003', 'ABING', 'INDRAMAYU', '25 FEBRUARI 1973', 'FSK183', 'S2', 'ABING.jpg'),
(13, '197001281995121001', 'AMBAR TRIWIDODO', 'CILACAP', '28 JANUARI 1970', 'BIG153', 'S2', 'AMBAR_TRIWIDODO.jpg'),
(14, '196206271988031005', 'ASEP RAMLI', 'GARUT', '27 JUNI 1962', 'PAG013', 'S2', 'usericon.png'),
(16, '-', 'HERI KUSWANDI', 'INDRAMAYU', '28 JUNI 1986', 'BID123', 'S1', 'HERI_KUSWANDI.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
('AST191', 'Astronomi'),
('BAR081', 'Bahasa Arab'),
('BID123', 'Bahasa Indonesia'),
('BIG153', 'Bahasa Inggris'),
('BIN141', 'Bahasa Indramayu'),
('BJP161', 'Bahasa Jepang'),
('BLG103', 'Biologi'),
('BPK043', 'Budi Pekerti dan Bimbingan Konseling'),
('BSD061', 'Bahasa Sunda'),
('EKN112', 'Ekonomi'),
('FSK183', 'Fisika'),
('GEO132', 'Geografis'),
('KMA203', 'Kimia'),
('MTK173', 'Matematika'),
('PAG013', 'Pendidikan Agama Islam'),
('PJO032', 'Pendidikan Jasmani dan Olaharga'),
('PKN092', 'Pendidikan Pancasila dan Kewarganegaraan'),
('SBK052', 'Seni Budaya dan Keterampilan'),
('SIN021', 'Sejarah Indonesia'),
('SPD071', 'Sejarah Peradaban Dunia'),
('TIK202', 'Teknologi Informasi dan Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(15) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`) VALUES
(1, 'Kegiatan Pembelajaran', '<p><strong>PENGUMUMAN</strong></p>\r\n\r\n<p>Diberitahukan kepada seluruh siswa SMAN 1 Haurgeulis bahwa kegiatan pembelajaran mulai dari tanggal <em>29 Mei 2020</em> dilaksanakan secara daring (online) hingga batas waktu yang belum ditentukan.&nbsp;</p>\r\n\r\n<p>Pengumuman ini berlaku hingga pengumuman selanjutnya dikeluarkan.</p>\r\n', '2020-06-03 03:22:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `foto_siswa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(1, '1111111111', 'BUDI SETIAWAN', 'JAKARTA', '07 MARET 2002', 'XI IPA 1   ', 'male_student3.png'),
(2, '2222222222', 'ANTON PRAMONO', 'BEKASI', '10 APRIL 2001', 'X IPS 2   ', 'male_student.png'),
(3, '3333333333', 'SYAIFUL ANWAR', 'INDRAMAYU', '12 MEI 2002', 'XI IPA 2    ', 'male_student1.png'),
(5, '4444444444', 'SILVIA WULAN YUNINGSIH', 'BANDUNG', '18 JULI 2001', 'XII IPA 2   ', 'female_student2.png'),
(7, '5555555555', 'ANGGITA PERTIWI', 'INDRAMAYU', '27 APRIL 2002', 'XI IPS 2', 'female_student1.png'),
(8, '6666666666', 'AGUS DWITAMA', 'CIREBON', '16 JANUARI 2001', 'XII IPS 2', 'male_student2.png'),
(9, '7777777777', 'BIMA ANUGERAH', 'INDRAMAYU', '15 MARET 2004', 'X BAHASA 1', 'male_student4.png'),
(10, '8888888888', 'SATRIA WIRA ATMAJA', 'INDRAMAYU', '30 SEPTEMBER 2003', 'X IPA 2', 'male_student5.png'),
(11, '9999999999', 'AISYAH NUR FATMA', 'INDRAMAYU', '10 FEBRUARI 2002', 'XI BAHASA 2', 'female_student.png'),
(12, '1212121212', 'AINI SHAFIRA FITRI', 'INDRAMAYU', '2001', 'XII IPA 1', 'female_student3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(2, 'User', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
