-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 09:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp_antara`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `headlines` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `img`, `headlines`, `content`, `created_at`) VALUES
(1, 'assets\\img\\antara\\article\\picture-1.png', 'Keotentikan Foto Jurnalistik, Senjata Pamungkas di Era Gempuran Kecerdasan Buatan', 'Era digital menandakan masa dimana kecerdasan buatan (AI) semakin mendominasi berbagai\naspek kehidupan. Di tengah gempuran AI tersebut, keaslian dan orisinalitas justru menjadi\nsemakin penting, terutama dalam dunia foto jurnalistik, di mana kredibilitas dan akurasi adalah\nsegalanya. Semakin cerdasnya masyarakat memicu mereka untuk selalu kritis terhadap\npemberitaan di media. Sehingga, masyarakat terbiasa mengkonsumsi berita yang bersifat orisinil,\nberimbang dan kredibel.\n<br><br>\nNamun, baru-baru ini publik dikejutkan dengan tersebarnya berita palsu tentang Presiden AS Joe\nBiden yang dibuat oleh AI Microsoft. Kejadian ini, bersama dengan maraknya teori konspirasi\ndan obituari yang tidak pantas dihasilkan oleh AI, menimbulkan kekhawatiran tentang\npenyalahgunaan AI dalam jurnalisme.\n<br><br>\nKemudian, pada tahun 2023, sebuah foto yang dihasilkan AI berjudul \"Cheeky Monkey\"\nmemenangkan penghargaan di Sony World Photography Awards. Kemenangan ini memicu\nperdebatan tentang peran AI dalam fotografi dan mengaburkan batas antara realitas dan\nmanipulasi.\n<br><br>\nBeragam peristiwa tersebut menimbulkan momok bagi para pewarta. Kejadian ini bisa menjadi\nbackfire bagi perusahaan jurnalistik. Sebuah berita bisa rusak karena adanya kesalahan yang\nditimbulkan oleh AI. Akibatnya, perusahaan akan kehilangan kepercayaan dari klien dan\nmasyarakat yang mengkonsumsi berita.\n<br><br>\nDi tengah kekhawatiran dan kebingungan ini, LKBN Antara tetap berkomitmen pada foto\njurnalistik yang otentik dan berkualitas tinggi melalui program \"Antara Foto\". Program ini\nmenawarkan solusi bagi media dan individu yang membutuhkan foto jurnalistik yang kredibel\ndan berkualitas tinggi (hi-res).\n<h4>\n  Antara Foto: Menjunjung Tinggi Orisinalitas di Era AI\n</h4>\nSelama lebih dari 80 tahun Antara telah menghasilkan foto yang beresolusi tinggi (hi-res). Foto\njurnalistik dengan kualitas ini memiliki ciri ber gambar tajam yang tajam, detail, dan berwarna\njernih. Gambar dengan jenis ini ideal untuk berbagai keperluan jurnalistik. Keaslian setiap foto\ndijamin bebas plagiasi dan akurat, menghadirkan realitas yang terpercaya.\n<br><br>\n<h4>\n  Pewarta Foto Berpengalaman dan Prestasi Gemilang\n</h4>\nTim Antara Foto terdiri dari fotografer jurnalistik profesional yang tersebar di seluruh Indonesia.\nMereka siap mengabadikan momen penting dengan keahlian dan kepekaan mereka. Prestasi\ngemilang Antara Foto diakui secara internasional, terbukti dengan menjadi official host\nphotographer untuk acara nasional dan internasional.\n<br><br>\n<h4>\n  Sejarah Panjang dan Kemampuan Manusia yang Tak Tertandingi\n</h4>\nAntara memiliki sejarah panjang dalam jurnalistik foto, terhubung dengan Indonesian Press\nPhoto Service (IPPHOS) yang didirikan pada masa perjuangan kemerdekaan. Meskipun AI\nmenawarkan kemudahan dan kecepatan, kemampuan manusia dalam fotografi jurnalistik tetap\ntak tertandingi.\n<br><br>\nAntara Foto menghadirkan kualitas unggul dengan menghasilkan 70-100 foto berkualitas tinggi\nper hari, menunjukkan keahlian dan stamina para fotografernya. Foto-foto Antara tidak hanya\ninformatif, tetapi juga estetis dan sesuai dengan konteks, menghadirkan cerita yang lebih lengkap\ndan mendalam. Sentuhan manusia dalam foto jurnalistik tak tergantikan oleh AI. Para fotografer\nAntara memiliki kemampuan untuk menangkap momen yang tak ternilai dengan sentuhan\nmanusia yang unik dan emosional.\n<br><br>\n<h4>\n  Kesimpulan\n</h4>\nDi era AI, keotentikan dan orisinalitas foto jurnalistik menjadi semakin penting. Antara Foto,\ndengan komitmennya pada kualitas, keaslian, dan kemampuan manusia, menawarkan solusi bagi\nmedia dan individu yang membutuhkan foto jurnalistik yang kredibel dan terpercaya.\n<br><br>\n<h4>\n  Sumber:\n</h4>\n<ul>\n  <li>\n    - Portal Antara\n  </li>\n  <li>\n    - BBC\n  </li>\n  <li>\n    - CNN\n  </li>\n</ul>', '2024-10-30'),
(2, 'assets\\img\\antara\\article\\picture-2.png', 'IMCS-BEYOND NEWS, SOLUSI TERDEPAN UNTUK MONITORING ANDA', 'Para ahli komunikasi seperti David Phillips, seorang profesor komunikasi di Universitas\nCalifornia, Berkeley, telah menyampaikan pentingnya media monitoring dalam konteks\nperusahaan. Phillips menekankan bahwa media monitoring membantu perusahaan untuk\nmengukur efektivitas komunikasi mereka, memahami persepsi masyarakat, serta merespons\nisu-isu krisis dengan cepat dan tepat. Dengan pemantauan yang teliti, perusahaan dapat\nmengidentifikasi tren yang muncul dalam pemberitaan media dan mengambil tindakan yang\nsesuai untuk menjaga reputasi mereka.\n<br><br>\nTujuan dari media monitoring tidak hanya sekadar mengidentifikasi paparan pemberitaan\nmengenai suatu lembaga atau perusahaan dalam media. Lebih dari itu, media monitoring\nmemiliki peran yang lebih luas sebagai strategi pencegahan untuk mengatasi kemungkinan\ntimbulnya isu-isu krisis. Dengan melakukan pemantauan media secara rutin, lembaga atau\n<br><br>\nperusahaan dapat mengantisipasi adanya percakapan, gejala, atau potensi eskalasi dari suatu isu\nsebelum mencapai tingkat yang lebih luas. Media monitoring juga menjadi krusial dalam\nmenjaga kepercayaan konsumen dan stakeholder terhadap suatu perusahaan. Hasil dari media\nmonitoring yang efektif dapat menjadi landasan untuk merumuskan strategi bisnis yang tepat\ndalam menghadapi persaingan dengan pesaing lainnya.\n<br><br>\nKegiatan media monitoring mencakup pemantauan berbagai jenis media massa, mulai dari\ntelevisi, media cetak, radio, hingga media daring (online) seperti Instagram, Twitter, Facebook,\ndan TikTok. Bagi para praktisi Public Relations, media monitoring menjadi alat penting untuk\nmenganalisis publisitas yang telah disebarkan melalui media massa. Pentingnya pengawasan\nmedia juga ditekankan oleh para ahli komunikasi, yang menggarisbawahi peran pemantauan\nmedia dalam mengukur efektivitas kampanye komunikasi serta memperoleh wawasan tentang\npersepsi dan tanggapan masyarakat terhadap suatu merek atau organisasi.\n<br><br>\nAntara IMCS hadir sebagai solusi untuk kebutuhan media monitoring perusahaan Anda.\nMengapa harus kami? Antara tidak hanya melakukan pemantauan media, tetapi juga\nmemberikan analisis dampak dari strategi yang telah dieksekusi sebelumnya oleh perusahaan.\nDengan jaringan yang luas dan tersebar di seluruh Indonesia, Antara menjadi pilihan terbaik\nuntuk melakukan pemantauan terhadap pemberitaan perusahaan Anda. Selain itu, Antara juga\nmemberikan evaluasi dan rekomendasi terhadap langkah komunikasi strategis selanjutnya bagi\nperusahaan melalui analisis laporan, rekomendasi, serta competitive intelligence report.\n<br><br>\nYang membedakan Antara dari layanan sejenis lainnya adalah kredibilitas, kejelasan, konsistensi,\ndan konektivitas yang dimiliki. Kredibilitasnya terjamin dengan tim yang berpengalaman dalam\njurnalisme, media, dan komunikasi yang menangani setiap tahap komunikasi korporat. Informasi\nyang dipublikasikan oleh Antara juga terkenal akan akurat, jelas, dan dapat dipercaya.\nKonsistensi publikasi informasi juga dijaga untuk memastikan bahwa berita yang dipublikasikan\nseimbang dan tidak bias. Terakhir, konektivitas Antara menghubungkan Anda dengan jaringan\ndan kanal media terluas, sehingga memungkinkan Anda menjangkau audiens baik di tingkat\nnasional maupun internasional.\n<h4>\n  Kesimpulan\n</h4>\nPara ahli komunikasi menegaskan bahwa media monitoring bukan hanya sekadar alat untuk\nmengukur paparan media, tetapi juga sebagai sarana untuk memahami tren dan pola perilaku\nmasyarakat terhadap suatu merek atau perusahaan. Dengan pemantauan media yang teliti,\nperusahaan dapat menyesuaikan strategi komunikasi mereka agar lebih responsif terhadap\nkebutuhan dan harapan konsumen. Media monitoring juga membantu perusahaan untuk\nmengidentifikasi peluang dan ancaman yang mungkin timbul dari lingkungan eksternal, sehingga\nmemungkinkan mereka untuk mengambil tindakan yang tepat dalam menghadapi perubahan\nyang terjadi. Dengan demikian, media monitoring menjadi salah satu alat yang penting dalam\nupaya perusahaan untuk membangun dan memelihara hubungan yang positif dengan publiknya.\n<br><br>\n<h4>\n  Sumber:\n</h4>\n<ul>\n  <li>\n    - Portal Antara\n  </li>\n  <li>\n    - Sagepub\n  </li>\n</ul>', '2024-10-30'),
(3, 'assets\\img\\antara\\article\\picture-3.png', 'Mengukir Masa Depan Digital: Mengapa Lembaga Pelatihan Digital Perlu Diperhitungkan?', 'Revolusi industri yang sedang berlangsung menuntut kita untuk memperoleh keterampilan khusus, seperti komputasi awan,\nanalisis data besar, Internet of Things (IoT), keamanan siber, kecerdasan buatan, dan robotika. Sebagai respons terhadap\nperubahan ini, perusahaan-perusahaan kini semakin menekankan pentingnya kemampuan digital, bahkan menjadikannya syarat\nutama untuk penerimaan kerja (Linkedin, 2022). Oleh karena itu, investasi dalam pengembangan keterampilan digital saat\nini dapat dianggap sebagai langkah yang strategis untuk masa depan.\n<br><br>\nDalam konteks Indonesia, program percepatan transformasi digital pemerintah menjadi bagian dari upaya untuk\nmengantisipasi kebutuhan akan sumber daya manusia yang terampil di bidang digital, terutama menjelang tahun 2045. Visi\n\"Indonesia Emas 2045\" menekankan pentingnya\nmembebaskan Indonesia dari ketertinggalan dalam hal sumber daya manusia digital. Seiring dengan itu, hampir setiap\nlowongan pekerjaan kini meminta kemahiran digital yang spesifik sebagai persyaratan utama.\n<br><br>\nNamun, bagi mereka yang merasa belum memiliki kemahiran digital yang memadai, mengikuti pelatihan digital dapat menjadi\nsolusi yang efektif. Menurut Mckinsey Global Institute, pelatihan digital dapat membawa sejumlah manfaat signifikan,\ntermasuk peningkatan peluang kerja, produktivitas, kreativitas, kemampuan berkomunikasi, dan peluang bisnis. Inisiatif\npemerintah dan dukungan dari lembaga-lembaga seperti Perum LKBN Antara melalui program Pijar Mahir menawarkan kesempatan\nbagi individu untuk memperdalam keterampilan mereka dalam berbagai bidang, seperti berita, public speaking, dan content\ncreator.\n<br><br>\nPelatihan digital dari Antara tidak hanya berfokus pada tren digital saat ini, tetapi juga dirancang untuk memenuhi\nkebutuhan konkret perusahaan terhadap talenta digital. Melalui aplikasi Pijar Mahir, peserta dapat mengakses pelatihan\ndengan mudah, sambil memperoleh manfaat tambahan seperti sertifikasi dan kesempatan untuk memanfaatkan promo-promo\nmenarik. Dengan demikian, pelatihan ini tidak hanya merupakan investasi dalam pengembangan diri, tetapi juga dapat\nmembuka pintu menuju kesuksesan di era digital yang terus berkembang.\n<h4>\n  Mengapa Pijar Mahir X Antara Layak Dipilih?\n</h4>\nBerikut adalah beberapa keuntungan yang akan dirasakan oleh peserta pelatihan:\n<br><br>\n<ol>\n  <li>\n    Instruktur Berpengalaman: Pelatihan\n    dipimpin oleh profesional jurnalis, presenter, dan public speaker yang memiliki pengalaman luas di bidangnya.\n  </li>\n  <li>\n    Paket Pelatihan Komprehensif: Peserta akan mendapatkan paket pelatihan lengkap yang mencakup video pelatihan,\n    dokumen\n    pelatihan, tes evaluasi, dan sertifikat.\n  </li>\n  <li>\n    Akses Fleksibel: Video pelatihan dapat diakses secara fleksibel, kapan pun\n    dan di mana pun, dengan durasi 30 menit dan materi yang disampaikan secara sederhana.\n  </li>\n  <li>\n    Penilaian Kemampuan: Materi pelatihan dilengkapi dengan pre-test dan post-test untuk memantau perkembangan peserta\n    sebelum dan setelah mengikuti pelatihan.\n  </li>\n  <li>\n    Reputasi Unggul: Pelatihan digital dari Antara telah mendapatkan penilaian\n    bintang 5/5 dari siswa, menandakan kualitasnya yang unggul.\n  </li>\n</ol>\nKesimpulannya, di tengah disrupsi teknologi yang terus berlanjut, pengembangan keterampilan digital bukan hanya menjadi\nkebutuhan, tetapi juga peluang bagi individu untuk meningkatkan daya saing mereka di pasar kerja yang semakin\nkompetitif. Melalui pelatihan digital yang tepat,\nseperti yang ditawarkan oleh Pijar Mahir Antara, individu dapat memperoleh keterampilan yang dibutuhkan untuk sukses di\nera digital, sambil membantu mewujudkan visi \"Indonesia Emas 2045\" dalam membangun sumber daya manusia yang terampil dan\nberdaya saing tinggi dalam bidang digital.\n<br><br>\n<h4>\n  Sumber:\n</h4>\n<ul>\n  <li>\n    - Antara.com\n  </li>\n  <li>\n    - Digital Skills For Today and Tomorrow\n  </li>\n  <li>\n    - Linkedin\n  </li>\n  <li>\n    - McKinsey Global Institute\n  </li>\n</ul>', '2024-10-30'),
(4, 'assets\\img\\antara\\article\\picture-4.png', 'Melampaui Batas: Menyelami Layanan Berita yang Komprehensif untuk Era Digital Masa Kini ', 'Larry Kilman, dalam tulisannya yang diterbitkan oleh UNESCO menyebut bahwa semenjak masa\npandemi Covid-19 terjadi krisis paradoksal perusahaan media. Hal ini tercermin pada masyarakat yang\nsemakin menurun kebutuhannya akan media pemberitaan. Hal ini disebabkan oleh menurunnya tingkat\nkepercayaan masyarakat terhadap media pemberitaan yang tidak menjunjung nilai kejurnalistikan sebagai\nmedia yang otentik, faktual dan berimbang. Selain itu, media pemberitaan seakan mengabaikan hubungan\nmereka dengan konsumen (customer relationship). Membangun customer relationship yang baik membuat\nperusahaan bisa mengerti kebutuhan konsumen. Berdasarkan Jurnal yang diterbitkan oleh The\nInternational Journal of Press/Politics (2021), dimensi pemberitaan yang berkualitas menurut masyarakat\nmemiliki elemen aktualitas, faktualitas, objektivitas, relevansi dan profesionalitas.\n<br><br>\nKemudian, pada jurnal yang sama, kualitas media pemberitaan terdiri dari jenis media, program, saluran,\nartikel berita dan item siarannya (de Vreese,2017). Selain itu, Holbert (2014) turut menjelaskan bahwa\npada saat yang bersamaan media harus turut memenuhi kebutuhan masyarakat akan hiburan. Berakar dari\nhal tersebut, media pemberitaan diharapkan mampu menghadirkan pemberitaan yang komprehensif\n<br><br>\ndimana bukan hanya menyertakan berita berupa teks, tetapi juga disertakan dengan elemen visual seperti\ninfografis, foto, video. Hal ini bertujuan untuk memperkaya pengetahuan visual dan membuat pembaca\nmerasakan peristiwa meski hanya membaca. Ditengah permintaan yang tinggi terhadap pemberitaan yang\nkomplet, Antara hadir sebagai media yang menyediakan berita beserta elemen visual terlengkap haya\ndalam satu portal saja. Demi memenuhi kebutuhan masyarakat dan media akan portal pemberitaan seperti\nyang disebutkan diatas Antara menerbitkan BrandA sejak 2019 lalu. Peresmian portal ini dikomandoi oleh\nMenkominfo Rudiantara bersama Ketua Dewan Pengawas Perum LKBN Antara Sutrimo\n<br><br>\nBrandA sendiri merupakan salah satu produk dan layanan unggulan Perum LKBN Antara yang resmi\ndiluncurkan pada 27 Agustus 2019 ini dicanangkan untuk mempermudah pelanggan dalam mengakses\nberita yang komplit cukup dalam satu portal. Sebelum BrandA direalisasikan, berita Antara berupa teks\ndengan elemen visualnya diakses dengan cara terpisah. Kini, pelanggan dapat mengakses BrandA yang\nmenggabungkan semua elemen berupa teks, video, foto dan infografis menjadi satu. Selain itu, pelanggan\njuga dapat memilih layanan mana saja yang diinginkan dalam kanal tersebut.\n<h4>\n  Sumber:\n</h4>\n<ul>\n  <li>\n    - Journal of Press/Politics\n  </li>\n  <li>\n    - Antara.com\n  </li>\n</ul>', '2024-10-30'),
(5, 'assets\\img\\antara\\article\\picture-5.png', 'Evolusi Konvergensi Meretas Jalan Baru dalam Komunikasi Terintegrasi ', 'Pernahkah Anda merasa bingung saat memilih sepatu untuk berolahraga? Yang Anda cari pastinya adalah sepatu berkualitas,\nbukan hanya dari satu merek, tetapi juga yang memiliki keunggulan dibanding merek lainnya. Analogi ini mencerminkan\npentingnya citra bagi sebuah perusahaan. Sebelum konsumen memilih produk atau layanan, mereka akan melakukan riset untuk\nmemastikan reputasi yang baik. Semakin positif reputasi perusahaan dan produknya, semakin besar kemungkinan konsumen\nmemilihnya.\n<br><br>\nSekarang, tentu muncul pertanyaan “Bagaimana langkah menjadi perusahaan dengan reputasi lebih unggul dibandingkan\nkompetitor?”. Proses membangun reputasi merupakan perjalanan panjang yang sudah ada sejak ratusan tahun yang lalu.\nBenjamin Franklin pada abad ke-18 menggambarkan proses ini sebagai \"sistem yang rapuh\", di mana satu kesalahan bisa\nmeruntuhkan semua citra baik yang telah dibangun. Persaingan dengan kompetitor dan keluhan dari pelanggan yang tidak\npuas semakin\nmemperumit permainan, terutama dengan munculnya era digital dan penggunaan internet. Namun, manajemen citra dapat\nmembantu perusahaan mempertahankan reputasi positifnya. Tim kehumasan yang kompeten memiliki kualifikasi yang mencakup\nkemampuan membangun hubungan, profesionalisme, etika yang kuat, keahlian dalam teknologi digital, pengetahuan industri\nyang luas, dan kepekaan terhadap isu-isu terkini. Berdasarkan Online Journal of Communication and Media Technologies\n(2016) terdapat berbagai kualifikasi yang harus dimiliki oleh tim kehumasan, yaitu:\n<ol>\n  <li>\n    Kemampuan dalam membangun hubungan: membina hubungan interpersonal, politik, kemampuan mendengar dan memahami\n  </li>\n  <li>\n    Tim yang Profesional: Memiliki target dan merancang strategi untuk memenuhi target tersebut\n  </li>\n  <li>\n    Memiliki nilai etika yang kuat\n  </li>\n  <li>\n    Memiliki anggota yang Mahir dalam bidang teknologi dan digital\n  </li>\n  <li>\n    Memiliki dasar pengetahuan dalam industri: berpengalaman, memahami bagaimana sebuah teori disampaikan, up to date,\n    memiliki gairah untuk belajar\n  </li>\n  <li>\n    Terdiri atas anggota yang merupakan individu pemikir: kritis, strategis, kreatif\n  </li>\n</ol>\nPerum LKBN Antara, dengan\npengalamannya selama lebih dari 10 windu, telah menjadi mitra dalam mengelola urusan kehumasan puluhan klien. Melalui\nlayanan Integrated Media Communication Services (IMCS)-Beyond News, Antara memberikan pelayanan unggulan yang mencakup\nperencanaan komunikasi strategis, eksekusi yang tepat, distribusi konten yang terpercaya, evaluasi komprehensif,\npengelolaan isu secara strategis, dan layanan terintegrasi lainnya. Semua layanan ini didukung oleh kualitas IMCS\nsebagai kanal yang kredibel, konsisten, dan memiliki jaringan yang luas. Melalui layanan ini klien akan mendapatkan\nservice unggulan dengan benefit berupa:\n<br><br>\n<ul style=\"list-style-type: disc; padding-left: 2rem;\">\n  <li>\n    Strategis dalam perencanaan komunikasi\n  </li>\n  <li>\n    Eksekusi yang tepat sasaran\n  </li>\n  <li>\n    Kanal distribusi yang terpercaya\n  </li>\n  <li>\n    Feedback yang komprehensif\n  </li>\n  <li>\n    Pengelolaan isu secara strategis dan akurat\n  </li>\n</ul>\n<br>\nBenefit yang telah dicantumkan diatas tentunya ditunjang oleh kualitas yang IMCS sebagai kanal yang kredibel,\nmengutamakan unsur kejelasan, konsisten dan memiliki jaringan koneksi yang luas. Melalui kualifikasi tersebut Antara\nsecara konsisten telah membantu klien dalam membentuk dan mempertahankan citra positifnya. Antara menyadari pentingnya\nmemberikan layanan terbaik kepada klien\nsebab reputasi perusahaan berkorelasi dengan loyalitas pelanggan berdasarkan Journal of Multidisciplinary Academic\n(2019). Tim konsulat kehumasan dituntut untuk menyediakan beragam layanan mulai dari layanan strategi perencanaan hingga\nevaluasinya. Oleh karena itu, IMCS menyediakan berbagai layanan terintegrasi yang spesifik dan dapat dipilih oleh klien\nsesuai dengan kebutuhan dengan detail sebagai berikut:\n<br><br>\n<ul style=\"list-style-type: disc; padding-left: 2rem;\">\n  <li>\n    Kreasi Konten (Produksi konten media komunikasi dari berbagai platform dengan creative team dan multimedia\n    editorial)\n  </li>\n  <li>\n    Aktivasi dan Sosialisasi (Membangun interaksi dengan publik dan audiens lewat kegiatan tertentu)\n  </li>\n  <li>\n    Evaluasi dan Rekomendasi (Evaluasi langkah komunikasi serta rekomendasi strategis berikutnya)\n  </li>\n  <li>\n    Diseminasi dan Distribusi (Pendistribusian konten tertentu ke kanal Antara dan Mitra)\n  </li>\n  <li>\n    Monitoring (Pemantauan dampak\n    dari strategi yang dieksekusi lewat media)\n  </li>\n  <li>\n    Pemetaan Isu (Memetakan dan analisis krisis agar diarahkan kepada strategi komunikasi yang tepat guna)\n  </li>\n</ul>\n<br>\nKerjasama dengan mitra strategis semakin memperkuat posisi IMCS dalam memberikan layanan terbaik kepada klien. Dengan\ndemikian, Antara terus berinovasi dan beradaptasi untuk meretas jalan baru dalam komunikasi terintegrasi, meneguhkan\nposisinya sebagai mitra yang handal dalam membantu perusahaan membangun dan mempertahankan citra positifnya.\n<br><br>\n<h4>\n  Kesimpulan\n</h4>\nEvolusi konvergensi dalam komunikasi terintegrasi menghadirkan IMCS-Beyond News sebagai solusi inovatif untuk membangun\nreputasi positif dan meningkatkan loyalitas pelanggan. Layanan terintegrasi dan kerjasama strategis IMCS-Beyond News\nmembantu perusahaan menavigasi lanskap komunikasi yang kompleks di era digital.\n<br><br>\n<h4>\n  Sumber:\n</h4>\n<ul>\n  <li>\n    - Antara Marketing KIT\n  </li>\n  <li>\n    - Online Journal of Communication and Media Technologies (2016)\n  </li>\n  <li>\n    - Journal of Multidisciplinary Academic (2019)\n  </li>\n</ul>', '2024-10-30'),
(6, 'assets\\img\\antara\\article\\picture-6.png', 'Kendali di Tengah Badai, Menguak Peran Vital Manajemen Krisis dalam Kelangsungan Operasional Perusahaan', 'Pada tahun 1982 terjadi salah satu krisis perusahaan paling bersejarah di dunia. Namun, dibalik\nkecelakaan tersebut manajemen krisi yang dilakukan oleh perusahaan dinilai menjadi salah satu yang\nterbaik hingga saat ini. Tepatnya perusahaan Johnson & Johnson yang terkenal dengan krisis “Kapsul\nTylenol”. Kronologi singkatnya, tujuh orang ditemukan tewas setelah mengkonsumsi kapsul tylenol. Hasil\ndari penyelidikan pun ditemukan kandungan Potasium Sianida yang mana zat tersebut bersifat mematikan.\nKrisis semakin diperparah dengan tidak ditemukannya si pelaku. Kejadian ini sempat membuat heboh dan\nturunnya kepercayaan konsumen terhadap produk Johnson & Johnson. Meski demikian, perusahaan\nmampu mengembalikan kepercayaan publik dan mendapatkan respons yang baik setelahnya. Kemudian\nsetelahnya tentu muncul pertanyaan “bagaimana eksekusi manajemen krisis perusahaan hingga menjadi\nsalah satu yang terbaik?”\n<br><br>\nSebelum menjawab pertanyaan tersebut, mari kita simak urgensi memahami manajemen krisis bagi\nperusahaan terutama praktisi kehumasan. Manajemen krisis adalah proses yang sistematis untuk\nmengidentifikasi, menganalisis, dan menangani krisis. Krisis dapat berupa bencana alam, kecelakaan\nindustri, skandal keuangan, atau peristiwa lain yang dapat mengganggu operasi normal suatu organisasi.\nManajemen krisis yang efektif dapat membantu organisasi untuk meminimalkan dampak negatif dari\nkrisis dan pulih dengan cepat. Bahkan, krisis juga bisa dijadikan ajang untuk menaikkan reputasi positif\nperusahaan seperti yang terjadi pada Johnson & Johnson. Terdapat beberapa poin yang menjadikan\nmanajemen krisis penting bagi sebuah perusahaan, yaitu:\n<ol>\n  <li>\n    Mengurangi Kerusakan dan Biaya (The Impact of Crisis Management on Organizational Outcomes,\n    2013)\n    Krisis dapat menyebabkan kerusakan signifikan pada organisasi, termasuk kerusakan properti, kehilangan\n    pendapatan dan kerusakan reputasi. Manajemen krisis yang efektif dapat membantu organisasi untuk\n    mengurangi kerusakan dan biaya yang terkait dengan krisis.\n  </li>\n  <li>\n    Mempercepat Pemulihan (Crisis Management and Organizational Resilience, 2015)\n    Manajemen krisis yang efektif dapat membantu organisasi untuk pulih dari krisis dengan lebih cepat. Hal\n    ini dapat dilakukan dengan mengidentifikasi dan mengatasi akar penyebab krisis, mengembangkan\n    rencana pemulihan, dan mengkomunikasikan secara efektif dengan pemangku kepentingan.\n  </li>\n  <li>\n    Meningkatkan Kepercayaan dan Reputasi (The Role of Communication in Crisis Management, 2010)\n    Krisis dapat merusak kepercayaan dan reputasi organisasi. Manajemen krisis yang efektif dapat membantu\n    organisasi untuk membangun kembali kepercayaan dan reputasi dengan menunjukkan bahwa organisasi\n    dapat menangani krisis secara efektif.\n  </li>\n  <li>\n    Meningkatkan Kesiapsiagaan (Crisis Preparedness: A Literature Review, 2014)\n    Manajemen krisis yang efektif dapat membantu organisasi untuk menjadi lebih siap menghadapi krisis di\n    masa depan. Hal ini dapat dilakukan dengan mengembangkan rencana krisis, melatih karyawan, dan\n    melakukan latihan.\n  </li>\n  <li>\n    Memenuhi Persyaratan Hukum (Legal Requirements for Crisis Management Plans, 2012)\n    Banyak organisasi diharuskan oleh hukum untuk memiliki rencana krisis. Manajemen krisis yang efektif\n    dapat membantu organisasi untuk memenuhi persyaratan hukum ini.\n  </li>\n</ol>\nPenjabaran terkait urgensi pentingnya manajemen krisis mempertegas bahwa sebuah perusahaan penting\nuntuk memetakan probabilitas krisis sesuai dengan level krisisnya. Meskipun krisis mungkin saja tidak\nterjadi, tetapi perusahaan tetap harus melakukan antisipasi. Sehingga, bilamana datang krisis perusahaan\n\ntidak tergugu dalam menentukan sikap dan mampu mempertahankan citra positifnya. Seperti halnya\nJohnson & Johnson dalam menangani krisis Tylenol yang telah dijabarkan sebelumnya. Respons Johnson\n& Johnson dalam merespons krisis diawali dengan menarik cepat 31 juta botol Tylenol yang bernilai US$\n100 juta. Kemudian, menghentikan produksi produk Tylenol dan iklan promosinya. Johnson & Johnson\nturut melibatkan FBI, FDA, dan Kepolisian Chicago dalam mencari biang keroknya. Setelah masa kritis\nterlewati, perusahaan melakukan upgrading produk Tylenol dengan kemasan baru yang lebih aman\n(tamper) serta menambahkan kupon senilai US$ 2,50. Atas segala tindakan Johnson & johnson dalam\nmengatasi krisis masyarakat memberi apresiasi positif. Perusahaan mampu bertindak gesit dalam\nmengatasi krisisnya. Bahkan, produk terbaru Tylenol dapat diterima kembali karena adanya peningkatan\nkualitas packaging.\n<br><br>\nDari kisah Johnson & Johnson dapat dilihat betapa pentingnya manajemen krisis agar citra dan loyalitas\npelanggan tetap terjaga. Di balik manajemen krisis yang hebat tentunya ada tim kehumasan yang\nkompeten dalam mengendalikan citra perusahaan. Mengingat manajemen krisis membutuhkan tindakan\nstrategis untuk merespons situasi negatif dan menjaga hubungan positif dengan pemangku kepentingan\nterdampak, maka perusahaan perlu selektif dalam memilih konsuler kehumasannya. Selain itu, setiap\nkrisis harus memiliki cara penanganan dan strategi manajemen yang berbeda. Berdasarkan jurnal dari Asia\nPacific Public Relations Journal (2020), terdapat tujuh strategi yaitu melimpahkan tanggung jawab kepada\npelaku krisis, menolak tuduhan adanya krisis, menutupi krisis, membenarkan adanya krisis diiringi dengan\nklaim risiko kecil, permintaan maaf secara penuh. Menilik pada keragaman metode manajemen krisis\nperusahaan dituntut untuk memiliki tim kehumasan yang bukan hanya kompeten secara teori tetapi juga\nberpengalaman.\n<br><br>\nDitengah dilema perusahaan dalam memilih mitra kehumasan terbaik untuk perusahaannya, Perum LKBN\nAntara hadir menjadi solusi buat Anda. Berbekal perjalanan lebih dari 10 windu Antara siap mendampingi\nAnda dalam urusan manajemen reputasi. Dengan jaringan media terluas hingga internasional, menjadikan\npelayanan kami terdepan. Antara, melalui kanal terpadu IMCS menyediakan layanan mulai dari pemetaan\nisu hingga eksekusi strategi. Selain itu, klien dapat memilih pelayanan sesuai dengan kebutuhan spesifik.\nKami juga menyediakan layanan pendukung seperti pendampingan wartawan dan media handling.\nDapatkan informasi terlengkap IMCS Antara terkait risk management hanya di (Cantumkan link Produk\nIMCS Risk Management Handling)\n<br><br>\n<h4>\n  Sumber:\n</h4>\n\n<ul>\n  <li><a href=\"https://skograndpr.com/2017/02/11/public-relations-case-study-johnson-johnson-tylenol-crisis/\">\n      - Public Relations Case Study: Johnson & Johnson Tylenol Crisis\n    </a></li>\n  <li><a href=\"https://www.ou.edu/deptcomm/dodjcc/groups/02C2/Johnson%20&%20Johnson.htm\">\n      - Johnson & Johnson\n    </a></li>\n  <li><a href=\"https://apnews.com/article/tylenol-killings-chicago-suspect-death-af8a7b44d2f45cb438bd7caf8cdb171c\">\n      - Tylenol Killings Chicago Suspect Death\n    </a></li>\n  <li>\n    - The Impact of Crisis Management on Organizational Outcomes, 2013\n  </li>\n  <li>\n    - Crisis Management and Organizational Resilience, 2015\n  </li>\n  <li>\n    - The Role of Communication in Crisis Management, 2010\n  </li>\n  <li>\n    - Meningkatkan Kesiapsiagaan (Crisis Preparedness: A Literature Review, 2014)\n  </li>\n  <li>\n    - Memenuhi Persyaratan Hukum (Legal Requirements for Crisis Management Plans, 2012)\n  </li>\n  <li>\n    - Asia Pacific Public Relations Journal, 2020\n  </li>\n</ul>', '2024-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(255) NOT NULL,
  `type` enum('css','js','img') NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `type`, `url`) VALUES
(1, 'css', 'assets/css/bootstrap.min.css'),
(2, 'css', 'assets/css/font-awesome.min.css'),
(3, 'css', 'assets/css/themify-icons.css'),
(4, 'css', 'assets/css/elegant-icons.css'),
(5, 'css', 'assets/css/flaticon-set.css'),
(6, 'css', 'assets/css/magnific-popup.css'),
(7, 'css', 'assets/css/owl.carousel.min.css'),
(8, 'css', 'assets/css/owl.theme.default.min.css'),
(9, 'css', 'assets/css/animate.css'),
(10, 'css', 'assets/css/validnavs.css'),
(11, 'css', 'assets/css/helper.css'),
(12, 'css', 'assets/css/style.css'),
(13, 'css', 'assets/css/service-slider.css'),
(14, 'css', 'assets/css/responsive.css'),
(15, 'css', 'assets/css/login.css'),
(16, 'js', 'assets/js/jquery-3.6.0.min.js'),
(17, 'js', 'assets/js/popper.min.js'),
(18, 'js', 'assets/js/bootstrap.bundle.min.js'),
(19, 'js', 'assets/js/jquery.appear.js'),
(20, 'js', 'assets/js/jquery.easing.min.js'),
(21, 'js', 'assets/js/jquery.magnific-popup.min.js'),
(22, 'js', 'assets/js/modernizr.custom.13711.js'),
(23, 'js', 'assets/js/owl.carousel.min.js'),
(24, 'js', 'assets/js/wow.min.js'),
(25, 'js', 'assets/js/progress-bar.min.js'),
(26, 'js', 'assets/js/isotope.pkgd.min.js'),
(27, 'js', 'assets/js/imagesloaded.pkgd.min.js'),
(28, 'js', 'assets/js/count-to.js'),
(29, 'js', 'assets/js/YTPlayer.min.js'),
(30, 'js', 'assets/js/validnavs.js'),
(31, 'js', 'assets/js/main.js'),
(32, 'css', 'assets/css/chatbot.css'),
(33, 'js', 'assets/js/chatbot.js');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`) VALUES
(1, 'Astra', 'assets/img/antara/logo/client/logo-astra.png'),
(2, 'Bank BNI', 'assets/img/antara/logo/client/logo-bank-bni.png'),
(3, 'Bank BRI', 'assets/img/antara/logo/client/logo-bank-bri.png'),
(4, 'Bank Indonesia', 'assets/img/antara/logo/client/logo-bank-indonesia.png'),
(5, 'Bank Mandiri', 'assets/img/antara/logo/client/logo-bank-mandiri.png'),
(6, 'BPJS Kesehatan', 'assets/img/antara/logo/client/logo-bpjs-kesehatan.png'),
(7, 'BPJS Ketenagakerjaan', 'assets/img/antara/logo/client/logo-bpjs-ketenagakerjaan.png'),
(8, 'CNN Indonesia', 'assets/img/antara/logo/client/logo-cnn-indonesia.png'),
(9, 'DPR', 'assets/img/antara/logo/client/logo-dpr.png'),
(10, 'Kominfo', 'assets/img/antara/logo/client/logo-kominfo.png'),
(11, 'Polri', 'assets/img/antara/logo/client/logo-polri.png'),
(12, 'MPR', 'assets/img/antara/logo/client/logo-mpr.png'),
(13, 'Pertamina', 'assets/img/antara/logo/client/logo-pertamina.png'),
(14, 'PLN', 'assets/img/antara/logo/client/logo-pln.png'),
(15, 'Shopee', 'assets/img/antara/logo/client/logo-shopee.png'),
(16, 'Trans News Corporate', 'assets/img/antara/logo/client/logo-trans-news-media.png'),
(17, 'Bank BJB', 'assets/img/antara/logo/client/logo-bank-bjb.png'),
(18, 'ID Clear', 'assets/img/antara/logo/client/logo-id-clear.png'),
(19, 'Kementrian Keuangan Republik Indonesia', 'assets/img/antara/logo/client/logo-kemenkeu.png');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `name`, `image`) VALUES
(1, 'Acn', 'assets/img/antara/logo/mitra/logo-acnnewswire.png'),
(2, 'Afp', 'assets/img/antara/logo/mitra/logo-afp.png'),
(3, 'Ap-News', 'assets/img/antara/logo/mitra/logo-ap-news.png'),
(4, 'Asianet', 'assets/img/antara/logo/mitra/logo-asianet.png'),
(5, 'Bernama', 'assets/img/antara/logo/mitra/logo-bernama.png'),
(6, 'Bloomberg', 'assets/img/antara/logo/mitra/logo-bloomberg.png'),
(7, 'Efe', 'assets/img/antara/logo/mitra/logo-efe.png'),
(8, 'Kyodo news', 'assets/img/antara/logo/mitra/logo-kyodo-news.png'),
(9, 'Oana', 'assets/img/antara/logo/mitra/logo-oana.png'),
(10, 'Sputnik', 'assets/img/antara/logo/mitra/logo-sputnik.png'),
(11, 'Reuters', 'assets/img/antara/logo/mitra/logo-reuters.png'),
(12, 'Ttxvn', 'assets/img/antara/logo/mitra/logo-ttxvn.png'),
(13, 'Xinhua News Agency', 'assets/img/antara/logo/mitra/logo-xinhua-news-agency.png'),
(14, 'HCM Ads Media', 'assets/img/antara/logo/mitra/logo-hcm-ads-media.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`) VALUES
(1, 'Antara News', 'antara news', 'assets/img/antara/logo/product/logo-antara-news.png'),
(2, 'Antara Foto', 'antara foto', 'assets/img/antara/logo/product/logo-antara-foto.png'),
(3, 'Antara TV', 'antara tv', 'assets/img/antara/logo/product/logo-antara-tv.png'),
(4, 'Branda', 'branda', 'assets/img/antara/logo/product/logo-branda.png'),
(5, 'IMCS', 'imcs', 'assets/img/antara/logo/product/logo-imcs.png'),
(6, 'Lembaga Pendidikan Antara', 'lpa', 'assets/img/antara/logo/product/logo-lpa.png'),
(7, 'Layanan Analisa Dan Informasi', 'layanan analisa dan informasi', 'assets/img/antara/logo/product/logo-layanan-analisa-dan-informasi.png'),
(8, 'Sewa Perangkat Keras', 'sewa perangkat keras', 'assets/img/antara/logo/product/logo-sewa-perangkat-keras.png'),
(9, 'Mice', 'mice', 'assets/img/antara/logo/product/logo-mice.png'),
(10, 'Antara Heritage Center', 'ahc', 'assets/img/antara/logo/product/logo-ahc.png'),
(11, 'Bloomberg', 'bloomberg', 'assets/img/antara/logo/product/logo-bloomberg.png'),
(12, 'Reuters', 'reuters', 'assets/img/antara/logo/product/logo-reuters.png'),
(13, 'HCM Ads Media', 'hcm', 'assets/img/antara/logo/product/logo-hcm-ads-media.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `oauth_id` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oauth_id` (`oauth_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
