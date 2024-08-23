<?php
$data = array(
  (object) [
    'id' => 1,
    'image' => 'assets/img/antara/Antara.png',
    'title' => 'Antara',
  ],
  (object) [
    'id' => 2,
    'image' => 'assets/img/antara/AntaraNews.png',
    'title' => 'Antara News',
  ],
  (object) [
    'id' => 3,
    'image' => 'assets/img/antara/IMCS.png',
    'title' => 'IMCS',
  ],
  (object) [
    'id' => 4,
    'image' => 'assets/img/antara/AntaraPRWIRE.png',
    'title' => 'Antara PRWIRE',
  ],
  (object) [
    'id' => 5,
    'image' => 'assets/img/antara/AntaraFoto.png',
    'title' => 'Antara Foto',
  ],
  (object) [
    'id' => 6,
    'image' => 'assets/img/antara/AntaraDigitalMedia.png',
    'title' => 'Antara Digital Media',
  ],
  (object) [
    'id' => 7,
    'image' => 'assets/img/antara/AntaraTV.png',
    'title' => 'Antara TV',
  ],
  (object) [
    'id' => 8,
    'image' => 'assets/img/antara/Mice.png',
    'title' => 'MICE',
  ],
  (object) [
    'id' => 9,
    'image' => 'assets/img/antara/Asj.png',
    'title' => 'Lembaga Pendidikan Antara',
  ],
  (object) [
    'id' => 10,
    'image' => 'assets/img/antara/GaleriFoto.png',
    'title' => 'Galeri Foto',
  ],
  (object) [
    'id' => 11,
    'image' => 'assets/img/antara/LayananData.png',
    'title' => 'Layanan Data',
  ],
  (object) [
    'id' => 12,
    'image' => 'assets/img/antara/AktivasiStrategiKomunikasi.png',
    'title' => 'Aktivasi Strategi Komunikasi',
  ],
);
?>

<!-- Start Gallery
    ============================================= -->
<section class="gallery-area default-padding default-padding-top">
  <div class="container-full">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class=""><a href="/">Home</a></li>
          <span class="mx-2"> > </span>
          <li aria-current="page" style="font-weight: 600; color: #AA0A2F;"><?= $model['title'] ?></li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-12 gallery-content">
        <div class="magnific-mix-gallery masonary">
          <div id="portfolio-grid" class="gallery-items colums-4">

            <!-- Single Item -->
            <?php foreach ($data as $item) : ?>
              <div class="pf-item">
                <div class="overlay wow fadeInUp" data-wow-delay="<?= $item->id * 150 ?>ms">
                  <div style="display: flex; width: auto; height: 200px;">
                    <img src='<?= $item->image ?>' alt="thumb" style="object-fit: contain; padding: 0 40px">
                  </div>
                  <div class="content">
                    <div class="title">
                      <span>Product</span>
                      <h5><a href="#"><?= $item->title ?></a></h5>
                    </div>
                    <a href="#">
                      Details
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- End Single Item -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Gallery -->