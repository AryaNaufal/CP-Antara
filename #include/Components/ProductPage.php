<!-- Start Gallery
    ============================================= -->
<section class="gallery-area default-padding default-padding-top">
    <div class="container-full">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=""><a href="<?= SERVER_NAME ?>">Home</a></li>
                    <span class="mx-2"> > </span>
                    <li aria-current="page" style="font-weight: 600; color: #AA0A2F;"><?= $title ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 gallery-content">
                <div class="magnific-mix-gallery masonary">
                    <div id="portfolio-grid" class="gallery-items colums-4">

                        <!-- Single Item -->
                        <?php foreach ($products as $item) : ?>
                            <div class="pf-item">
                                <div class="overlay wow fadeInUp shadow-sm" data-wow-delay="<?= $item['id'] * 100 ?>ms">
                                    <div style="display: flex; width: auto; height: 200px;">
                                        <img src='<?= $item['image'] ?>' alt="thumb" style="object-fit: contain; padding: 0 40px; width: 100%;">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            <span>Product</span>
                                            <h5>
                                                <a href="<?= SERVER_NAME . "product/" . $Lib->seo_title($item['slug']) ?>">
                                                    <?= $item['name'] ?>
                                                </a>
                                            </h5>
                                        </div>
                                        <a href="<?= SERVER_NAME . "product/" . $Lib->seo_title($item['slug']) ?>">
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