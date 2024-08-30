<?php if (!empty($item)): ?>
    <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding default-padding-top">
        <div class="container">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class=""><a href="<?= SERVER_NAME ?>">Home</a></li>
                        <span class="mx-2"> > </span>
                        <li class=""><a href="<?= SERVER_NAME . "product" ?>">Product</a></li>
                        <span class="mx-2"> > </span>
                        <li aria-current="page" style="font-weight: 600; color: #AA0A2F;"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
            <div class="services-details-items">
                <div class="row">

                    <?php
                    $descriptionFile = __DIR__ . '/ProductDescription/' . $Lib->seo_title($item['slug']) . '.php';
                    $errorMessage = "<p style='font-weight: 600; color: #202942;'>Sorry, product description is not available.</p>";

                    if (is_readable($descriptionFile)) {
                        include_once $descriptionFile;
                    } else {
                        echo $errorMessage;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>