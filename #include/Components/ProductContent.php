<?php if (!empty($item)): ?>
    <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding default-padding-top">
        <div class="container">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class=""><a href="<?= SERVER_NAME ?>">Beranda</a></li>
                        <span class="mx-2"> > </span>
                        <li class=""><a href="<?= SERVER_NAME . "product" ?>">Produk</a></li>
                        <span class="mx-2"> > </span>
                        <li aria-current="page" style="font-weight: 600; color: var(--color-primary);"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
            <div class="services-details-items">
                <div class="row">

                    <?php
                    $descriptionFile = __DIR__ . '/ProductDescription/' . $Lib->seoTitle($item['slug']) . '.php';
                    $errorMessage = "<p style='font-weight: 600; color: #202942;'>Sorry, product description is not available.</p>";

                    if (is_readable($descriptionFile)) {
                        include_once $descriptionFile;
                    } else {
                        echo $errorMessage;
                    }
                    ?>
                    <?php if (!isset($_SESSION['user_id'])): ?>
                        <div class="my-5">
                            <a href="<?= SERVER_NAME ?>form-data.php" target="_self" class="rounded-3 align-self-center px-3 py-2" style="background-color: var(--color-primary); color: white;">Informasi Lebih Lanjut...</a>
                        </div>
                    <?php else: ?>
                        <?php if (empty($_SESSION['data_npwp'])): ?>
                            <div class="my-5">
                                <a href="<?= SERVER_NAME ?>form-data.php" target="_self" class="rounded-3 align-self-center px-3 py-2" style="background-color: var(--color-primary); color: white;">Price List...</a>
                            </div>
                        <?php else: ?>
                            <?php include_once ROOT_PATH . '/#include/Components/PriceList.php'; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>