<?php
define('PRODUCT_PATH', SERVER_NAME . "product/");
?>
<!-- Start Gallery
    ============================================= -->
<section class="gallery-area default-padding default-padding-top">
    <div class="container-full">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=""><a href="<?= SERVER_NAME ?>">Beranda</a></li>
                    <span class="mx-2"> > </span>
                    <li aria-current="page" style="font-weight: 600; color: var(--color-primary);"><?= $title ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 gallery-content">
                <div class="magnific-mix-gallery masonary">
                    <div id="portfolio-grid" class="gallery-items colums-4">

                        <!-- Single Item -->
                        <?php foreach ($sisaProduct as $item) : ?>
                            <div class="pf-item">
                                <div class="overlay wow fadeInUp shadow-sm" data-wow-delay="<?= $item['id'] * 100 ?>ms">
                                    <div style="display: flex; width: auto; height: 200px;">
                                        <img src='<?= $item['image'] ?>' alt="thumb" style="object-fit: contain; padding: 0 40px; width: 100%;">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <span>Product</span>
                                            <h5>
                                                <a href="<?= PRODUCT_PATH . $Lib->seoTitle($item['slug']) ?>" aria-label="<?= $item['name'] ?>">
                                                    <?= $item['name'] ?>
                                                </a>
                                            </h5>
                                        </div>
                                        <a href="<?= PRODUCT_PATH . $Lib->seoTitle($item['slug']) ?>">
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
        <div class="row">
            <div class="col-md-6 gallery-content mt-5">
                <div class="pl-20 my-4">
                    <h4 class="fw-bold">Produk Kemitraan</h4>
                    <div style="background-color: var(--color-primary); width: 100px; height: 2px;"></div>
                </div>
                <div class="magnific-mix-gallery masonary">
                    <div id="portfolio-grid" class="gallery-items colums-2">
                        <!-- Single Item -->
                        <?php foreach ($mitraProduct as $item) : ?>
                            <div class="pf-item">
                                <div class="overlay wow fadeInUp shadow-sm" data-wow-delay="<?= $item['id'] * 100 ?>ms">
                                    <div style="display: flex; width: auto; height: 200px;">
                                        <img src='<?= $item['image'] ?>' alt="thumb" style="object-fit: contain; padding: 0 40px; width: 100%;">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <span>Product</span>
                                            <h5>
                                                <a href="<?= PRODUCT_PATH . $Lib->seoTitle($item['slug']) ?>" aria-label="<?= $item['name'] ?>">
                                                    <?= $item['name'] ?>
                                                </a>
                                            </h5>
                                        </div>
                                        <a href="<?= PRODUCT_PATH . $Lib->seoTitle($item['slug']) ?>">
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
            <div class="col-md-6 gallery-content mt-5">
                <div class="pl-20 my-4">
                    <h4 class="fw-bold">Produk Afiliasi</h4>
                    <div style="background-color: var(--color-primary); width: 100px; height: 2px;"></div>
                </div>
                <div class="magnific-mix-gallery masonary">
                    <div id="portfolio-grid" class="gallery-items colums-2">
                        <!-- Single Item -->
                        <?php foreach ($affiliateProduct as $item) : ?>
                            <div class="pf-item">
                                <div class="overlay wow fadeInUp shadow-sm" data-wow-delay="<?= $item['id'] * 100 ?>ms">
                                    <div style="display: flex; width: auto; height: 200px;">
                                        <img src='<?= $item['image'] ?>' alt="thumb" style="object-fit: contain; padding: 0 40px; width: 100%;">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <span>Product</span>
                                            <h5>
                                                <a href="<?= PRODUCT_PATH . $Lib->seoTitle($item['slug']) ?>" aria-label="<?= $item['name'] ?>">
                                                    <?= $item['name'] ?>
                                                </a>
                                            </h5>
                                        </div>
                                        <a href="<?= PRODUCT_PATH . $Lib->seoTitle($item['slug']) ?>">
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