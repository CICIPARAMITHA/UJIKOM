-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 02:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cici_weding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `gambar`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'app/profile/1-1697710071-QNSzB.webp', 'Veni Kusuma Wulandari Amd.Kom', 'admin@gmail.com', '$2y$10$5uVKxB4OLVNAtuqpNB/TXup2/HMJy/6vCU0yUm1q9QYcvau/FLBUS', NULL, '2023-10-19 17:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `thumbnail` char(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `thumbnail`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'app/artikel/-1697735137-hSLR0.jpg', 'Manajer WO Jadi Tersangka Kebakaran Savana Bromo, Terancam Denda Maksimal Rp 1,5 Miliar', '<p><strong>TEMPO.CO, Probolinggo</strong>&nbsp;- Manajer&nbsp;<a href=\"https://www.tempo.co/tag/wedding-organizer\">wedding organizer</a>&nbsp;(WO) AP, 41 tahun, dijadikan tersangka dalam kasus kebakaran di blok Savana atau area bukit Teletubbies Taman Nasional&nbsp;<a href=\"https://www.tempo.co/tag/bromo\">Bromo</a>&nbsp;Tengger Semeru (TNBTS). Pelaku terancam hukuman penjara paling lama lima tahun dan&nbsp;<a href=\"https://www.tempo.co/tag/denda\">denda</a>&nbsp;paling banyak Rp 1,5 miliar.</p>\r\n<p>\"Usai dilaksanakan serangkaian pemeriksaan terhadap enam orang yang kami tangkap, satu orang ditetapkan sebagai tersangka berdasarkan dua alat bukti yang cukup, sehingga statusnya dinaikkan dari saksi menjadi tersangka,\" kata Kapolres Probolinggo AKBP Wisnu Wardana, Kamis, 7 September 2023.</p>\r\n<p>Dilansir dari&nbsp;<em>Tempo</em>, blok&nbsp;<a href=\"https://www.tempo.co/tag/savana\">Savana</a>&nbsp;Watangan atau area Bukit Teletubbies di Gunung Bromo diberitakan terbakar pada Rabu, 6 September 2023 sekitar pukul 11.30 WIB. Kebakaran diduga karena kelalaian pengunjung yang menggunakan&nbsp;<em>flare</em>&nbsp;asap saat foto&nbsp;<em><a href=\"https://www.tempo.co/tag/savana\">prewedding</a>&nbsp;</em>(pranikah).</p>\r\n<p>\"Memang benar bahwa kebakaran di Bukit Teletubbies karena salah satu dari lima flare asap meletus saat dinyalakan, sehingga mengeluarkan percikan api yang akhirnya membakar rumput kering di padang savana tersebut,\" tuturnya.</p>\r\n<p>Akibat kebakaran itu, lanjut dia, pengelola TNBTS segera melapor ke Polsek Sukapura yang langsung ditindaklanjuti oleh Kapolsek Sukapura beserta anggota dengan mendatangi area Bukit Telettubies guna membantu proses pemadaman serta mengamankan enam pengunjung yang terlibat dalam kegiatan foto&nbsp;<em>prewedding</em> itu.</p>\r\n<p>\"Setelah kami meminta keterangan dari enam orang itu, kami menetapkan AP (41), warga Kabupaten Lumajang yang merupakan manajer WO itu sebagai tersangka dalam kasus Karhutla di Bukit Teletubbies,\" katanya.</p>\r\n<h2><strong>Tak punya Simaksi</strong></h2>\r\n<p>Saat memasuki kawasan TNBTS, lanjut Wisnu, manajer WO tidak memilik Surat Izin Memasuki Kawasan Konservasi (Simaksi), sehingga menyalahi aturan.</p>\r\n<p>\"Dengan adanya kejadian kebakaran itu, kami sangat menyayangkan karena banyak pihak yang dirugikan. Kami tentunya sangat serius dalam menindak tegas para pelaku yang melakukan pembakaran baik hutan maupun lahan,\" ujarnya.</p>\r\n<p>Tersangka dijerat Pasal 50 ayat 3 huruf d jo Pasal 78 ayat 4 Undang-Undang Nomor 41 Tahun 1999 tentang Kehutanan sebagaimana diubah dalam Pasal 50 ayat 2 huruf b jo Pasal 78 ayat 5 UU Nomor 6 Tahun 2023 tentang Penetapan Peraturan Pemerintah Pengganti UU RI No. 2 Tahun 2022 tentang Cipta Kerja menjadi Undang-Undang dan atau Pasal 188 KUHP dengan ancaman hukuman penjara paling lama lima tahun dan denda paling banyak Rp 1,5 miliar.</p>', '2023-10-20 00:05:37', '2023-10-20 01:59:31'),
(3, 'app/artikel/-1697736876-lXPyr.jpg', '5 Gedung Pernikahan di Depok Outdoor & Indoor', '<p>Acara&nbsp;<strong>resepsi pernikahan</strong>&nbsp;biasanya selalu jadi sesuatu yang dipikirkan dengan matang oleh para calon pengantin. Makanya, menentukan tempat untuk menggelar acara resepsi jadi salah satu hal yang krusial banget. Pasalnya, tempat itu nantinya bakal jadi saksi pernikahanmu serta tempat yang berkesan untuk keluarga besar dan para tamu undangan lo.</p>\r\n<p>Di tengah masa pandemi seperti ini, penting banget memikirkan dengan matang&nbsp;<em>lokasi gedung pernikahan</em>&nbsp;dan fasilitas yang ditawarkan. Jumlah tamu juga biasanya turut jadi pertimbangan pemilihan gedung, bahkan ada yang dengan sengaja mengincar lokasi dengan&nbsp;<em>venue outdoor</em>&nbsp;agar acara bisa berjalan sedikit lebih lega.</p>\r\n<p>Nah, buat kamu yang lagi cari-cari tempat untuk melangsungkan resepsi pernikahan di sekitar Depok, Jawa Barat kamu bisa simak rekomendasi gedung pernikahan di Depok berikut ini.</p>\r\n<h2>1. Felfest UI</h2>\r\n<p>Gedung Felfest UI ini letaknya ada di dalam kampus Universitas Indonesia dengan latar danau UI. Felfest UI menyediakan 5 paket pernikahan lo untuk era&nbsp;<em>new normal</em>&nbsp;mulai dari 30 sampai 200 pax dengan harga sekitar 99 juta.</p>\r\n<p>Fasilitas yang disedikan mulai dari gedung, dekorasi, rias dan busana, katering,&nbsp;<em>food stall</em>,&nbsp;<em>entertaiment</em>, dokumentasi, MC, dan juga WO. Mereka juga menerapkan protokol kesehatan seperti menggunakan masker, sarung tangan,&nbsp;<em>handsanitizer</em>, sterilisasi desinfektan, pengecekan suhu, dan juga memastikan kesehatan&nbsp;<em>crew</em>-nya lo!</p>\r\n<h2>2. Dapoer Djoeang</h2>\r\n<p>Rekomendasi gedung pernikahan di Depok selanjutnya ada di Depoer Djoeang. Ada 4 paket pernikahan yang bisa kamu pilih lo yaitu Jasmine Wedding Package untuk 100 pax, Lily Wedding Package untuk 50 pax, Daisy Wedding Package untuk 200 pax, dan Rose WEdding Package untuk 400 pax. Kisaran harga tempat resepsi di daerah Sukmajaya ini yaitu mulai dari harga 19,5 juta sampai 68 juta rupiah.</p>\r\n<p>Saat pandemi, mereka juga membatasi jumlah tamu maksimal 200 orang saja nih. Fasilitas yang disediakan yaitu venue acara untuk 3 jam,&nbsp;<em>makeup</em>&nbsp;dan&nbsp;<em>hair do</em>, prasmanan, sepasang baju calon pengantian pria dan wanita, dekorasi, fotografi, videografi, serta&nbsp;<em>sound system</em></p>\r\n<h2>3. The Manor Andara</h2>\r\n<p>Kalau kamu mau melangsungkan pernikahan di dekat rumah Raffi Ahmad, kamu bisa pilih The Manor Andara di daerah Cinere. Tempat ini menyediakan&nbsp;<em>venue indoor</em>&nbsp;dan&nbsp;<em>outdoor</em>&nbsp;juga lo.</p>\r\n<p>Ada beberapa tipe ruangan yang bisa kamu pilih untuk dijadikan lokasi nih, yaitu Main Hall, Pavilion, Rose Garden, Jasmine Garden, Pool, dan juga Playground. Kisaran harga untuk menyewa tempat ini yaitu mulai dari 69,7 juta untuk 100 pax ya. Kamu juga bisa menambah jumlah</p>\r\n<p>Savero Hotel punya 3 paket pernikahan yang bisa kamu pilih, mulai dari Cendana Wedding Package, Alamanda Wedding Package, dan juga Edelweis Wedding Package untuk kapasitas 300 sampai 500 orang.</p>\r\n<p>Fasilitas yang disediakan yaitu venue acara,&nbsp;<em>wedding buffet menu</em>,&nbsp;<em>ice tea</em>,&nbsp;<em>mineral water</em>,&nbsp;<em>food stall</em>,&nbsp;<em>test food</em>, dekorasi, MC, Entertaiment, LCD screen, paket menginap untuk pasangan pengantin, dan juga&nbsp;<em>free valet parking</em>. Kisaran harga untuk menggelar pesta pernikahan di hotel daerah Margonda ini yaitu mulai dari 79 juta sampai 154 juta rupiah.</p>\r\n<h3>5. Omah Ndoro</h3>\r\n<p>Di daerah Cimanggis ada tempat yang cocok nih buat kamu yang mau menggelar resepsi dengan tema adat Jawa. Omah Ndoro punya pendopo yang desain adat Jawanya kental banget!</p>\r\n<p>Tapi, mereka juga punya opsi&nbsp;<em>garden party</em>&nbsp;lo buat kamu yang pengin pesta pernikahan ala kebun. Omah Ndoro punya paket pernikahan yang kisaran harganya sekitar 100 jutaan untuk 500 tamu undangan dengan fasilitas dekorasi, dokumentasi, entertaiment, dan juga katering.</p>\r\n<p>Itulah rekomendasi weeding venue di Depok yang bisa kamu jadikan referensi. Bagaimana SoHip? Sudah ada bayangan kira-kira nanti mau menggelar resepsi nikah di mana? Buat yang ada rencana menikah tahun ini, semoga semua persiapan dilancarkan sampai hari H ya!</p>\r\n<p>pax sesuai dengan kebutuhanmu.</p>\r\n<p>&nbsp;</p>', '2023-10-20 00:34:36', '2023-10-20 02:15:51'),
(5, 'app/artikel/-1697743018-hmVuH.jpg', 'Keuntungan Gunakan Wedding Planner dalam Persiapan Pernikahan', '<p>Banyak orang menilai mempersiapkan pernikahan adalah hal yang samudah. Namun sebenarnya jika ditelisik lebih dalam lagi, ada banyak hal yang harus dicek dalam persiapan acara pernikahan pasangan. Belum lagi bila selain pesta pernikahan di hari H, ada pula pesta atau acara internal antara dua keluarga yang biasanya berlangsung sebelum acara&nbsp;<a href=\"https://www.tempo.co/tag/pernikahan\">pernikahan</a>. Berbagai tetek bengek itu pasti akan membuat waktu para pasangan yang akan menikah semakin sedikit dan tersita, jika mempersiapkan acara pernikahan dilakukan secara mandiri.</p>\r\n<p><a href=\"https://www.tempo.co/tag/persiapan-pernikahan\">Persiapan pernikahan</a>&nbsp;yang matang akan membuat acara pernikahan yang telah lama diimpikan bersama pasangan bisa menjadi momen yang tak terlupakan. Tidak heran, pesta itu pun nantinya akan diapresiasi lebih oleh tamu undangan. Saat ini, banyak pasangan menggunakan jasa wedding planner yang nantinya akan mengatur semua acara pernikahan mulai dari awal hingga akhir pesta.</p>\r\n<p>Wedding planner merupakan sebuah pihak yang mempunyai layanan atau jasa dalam merencanakan sebuah acara pernikahan mulai dari awal hingga akhir. Wedding Planner bertugas dalam berkomunikasi dengan vendor, mengatur pertemuan dengan kedua pihak keluarga, merancang konsep acara, dan masih banyak lagi.</p>\r\n<p>Sebuah wedding planner akan menjadi one stop wedding, yang akan membantu pasangan untuk tidak bersusah payah dan kebingungan dalam mengurus hal-hal yang berkaitan dengan pernikahannya.</p>\r\n<p>Ada beberapa alasan mengapa pasangan yang berniat menikah lebih diuntungkan jika menggunakan&nbsp;<a href=\"https://www.tempo.co/tag/wedding-planner\">wedding planner</a>.&nbsp;</p>\r\n<h2>1. Hemat Waktu</h2>\r\n<p>Pasangan akan dibantu oleh tim wedding planner, dan dapat menggunakan waktu mereka untuk hal-hal penting lainnya.</p>\r\n<h2>2. Mendapat vendor yang terbaik&nbsp;</h2>\r\n<p>Beberapa tim wedding planner sudah mempunyai kenalan berbagai vendor yang siap mendukung acara pernikahan Anda. Sehingga pasangan tidak perlu pusing lagi memikirkan vendor dari mulai dekorasi hingga makanan untuk urusan ini. Wedding planner Alissha Bride contohnya, sejak 2018 sudah mengurus paket perninahan lengkap. Sudah ada banyak ribuan klien yang ditanganinya mulai dari kalangan biasa hingga publik figur. Ada beberapa vendor yang bekerja sama dengan wedding planner ini. Ada hotel bintang 4 yang digunakan seperti hotel Ciputra Jakarta dan Hotel Aston Kartika Grogol. Ada pula venue hotel bintang 5 yang biasa digunakan yaitu JW Marriott, Gandaria City, Pullman CP, Hotel Westin Jakarta dan hotel bintang 5 lain nya.&nbsp;</p>\r\n<h2>3. Bisa mengetahui budget</h2>\r\n<p>Dengan menggunakan jasa wedding planner, pasangan jadi tahu berapa budget yang akan dikeluarkan nantinya, ditambah wedding planner mempunyai beragam paket yang dapat dipilih sesuai kebutuhan pasangan yang ingin menikah.&nbsp;</p>\r\n<p>CEO Alissha Bride, Romario Kusno mengatakan walau menggunakan tempat acara di hotel bintang 4 dan 5, ia meyakinkan harga bisa ekonnomis. &ldquo;Di Alissha Bride, Anda bisa mendapatkan venue bintang 5. Namun uang yang kamu keluarkan tetap ekonomis,&rdquo; sebut CEO Alissha Bride, Romario Kusno dalam keterangan pers yang diterima Tempo pada 17 Maret 2023.&nbsp;</p>\r\n<p>Kusno menambahkan para pengantin perempuan pun akan langsung diberikan pilihan gaun cantik untuk hari pernikahan mereka. &ldquo;Gaun-gaun cantik yang akan dikenakan oleh klien Alissha Bride dirancang oleh Yenti Nuddin. Yenti adalah desainer terkenal yang sudah lama dalam mendesain gaun untuk Alissha Bride,&rdquo; kata Kusno.</p>', '2023-10-20 02:16:58', '2023-10-20 02:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `thumbnail`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'app/event/-1697743655-NOk9R.jpg', 'Jakarta Wedding Festival 2022', 'Weddingku bersama Dyandra Promosindo kembali mengadakan pameran Jakarta Wedding Festival (JWF) 2022 yang diadakan secara hybrid, yaitu kegiatan online melalui situs https://weddingfestival.id/ mulai tanggal 15 – 28 Agustus 2022, dan juga offline mulai tanggal 26 – 28 Agustus 2022 di Assembly Hall Jakarta Convention Center (JCC) Senayan.\r\nJakarta Wedding Festival (JWF) tahun ini kembali menghadirkan lebih dari 250 vendor pernikahan di antaranya Desainer baju pengantin internasional dan tradisional, catering, florist, dekorasi, groom suit, hotel, undangan pernikahan, souvenir, wedding planner and organizer, entertainment, wedding cake, hingga vendor dokumentasi seperti foto dan video. Pameran wedding kedua di tahun dari Weddingku dan Dyandra Promosindo hadir dengan konsep Bright and Edgy Modern Colorful Wedding, terinspirasi dari harmonisasi warna warni khas musim panas seperti teal blue, coral, serta aksen pink dan kuning yang dikemas secara modern dan eksentrik. Konsep pernikahan ini bisa menjadi inspirasi bagi calon pengantin karena gaya dekorasi pernikahan ini sangat fleksibel untuk digunakan baik outdoor maupun indoor.', '2023-10-19 19:35:08', '2023-10-20 02:35:08'),
(3, 'app/event/-1697744072-torKu.jpg', 'Pelatihan Offline Wedding Organizer', 'Event Organizer atau EO adalah penyelenggara acara,atau usaha dalam bidang jasa yang mengorganisasikan seluruh rangkaian acara, mulai dari perencanaan, persiapan, eksekusi hingga evaluasi, dalam rangka membantu mewujudkan tujuan yang diharapkan client dengan membuat acara. Pada dasarnya EO merupakan sekumpulan orang yang bergerak dalam sebuah organisasi yang berfungsi mengatur suatu acara mulai dari perencanaan, pelaksanaan hingga purna acara.', '2023-10-20 02:34:32', '2023-10-20 02:34:32'),
(4, 'app/event/-1697744333-SVUpE.jpg', 'Pernikahan Kaesang Pangarep dan Erina Gudono', 'Pasangan Erina Gudono dan Kaesang Pangarep sudah mempersiapkan pesta pernikahannya dengan matang.\r\nRupanya Kaesang Pangarep dan Erino Gudono menggunakan Wedding Organizer (WO) untuk membantu merencanakan persiapan, termasuk tema pernikahan.', '2023-10-20 02:38:53', '2023-10-20 02:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `keterangan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `judul`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'app/galeri/2-1697744682-whZL8.png', 'Galery 1', 'Pasangan Pengantin', '2023-10-20 00:46:10', '2023-10-20 02:44:42'),
(3, 'app/galeri/3-1697744720-8mJ65.jpg', 'Galeri 2', 'Dekorasi Ruangan', '2023-10-20 00:46:23', '2023-10-20 02:45:20'),
(4, 'app/galeri/4-1697744753-nMwPz.jpg', 'Galeri 3', 'Hand Bouquet', '2023-10-20 00:46:35', '2023-10-20 02:45:53'),
(5, 'app/galeri/5-1697744780-bSDFZ.jpg', 'Galeri 4', 'Kue Pernikahan', '2023-10-20 00:46:50', '2023-10-20 02:46:20'),
(6, 'app/galeri/6-1697744845-g2peq.jpg', 'Galeri 5', 'Kebaya Akad', '2023-10-20 00:47:04', '2023-10-20 02:47:25'),
(7, 'app/galeri/7-1697744939-72a4w.jpg', 'Galeri 6', 'Gaun Resepsi Pernikahan', '2023-10-20 00:47:18', '2023-10-20 02:48:59'),
(8, 'app/galeri/-1697745111-e1HPy.jpg', 'Galeri 7', 'Pelaminan', '2023-10-20 02:51:51', '2023-10-20 02:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'Paket Silver (100 undangan, 200 orang)', 19900000, 'app/paket/5-1697741489-r7vPk.jpg', '2023-10-19 22:37:31', '2023-10-20 01:52:51'),
(6, 'Paket Gold (300 undangan, 600 orang)', 43300000, 'app/paket/6-1697741556-RV0OC.jpg', '2023-10-19 22:43:15', '2023-10-20 01:52:36'),
(7, 'Paket Platinum (450 undangan, 900 orang)', 66800000, 'app/paket/7-1697741633-xzpUZ.jpg', '2023-10-19 22:44:37', '2023-10-20 01:53:53'),
(8, 'Paket Diamond (600 undangan, 1.200 orang)', 89900000, 'app/paket/-1697741681-TaZrv.jpg', '2023-10-20 01:54:41', '2023-10-20 01:54:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
