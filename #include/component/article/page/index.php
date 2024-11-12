<?php
$articlesPerPage = 6;
$totalArticles = count($articles);
$totalPages = ceil($totalArticles / $articlesPerPage);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, min($totalPages, $page));

$offset = ($page - 1) * $articlesPerPage;

$articles = array_slice($articles, $offset, $articlesPerPage);
?>

<!-- Start Blog
    ============================================= -->
<section class="blog-area full-blog blog-standard full-blog grid-colum default-padding default-padding-top">
    <div class="container">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=""><a href="<?= SERVER_NAME ?>">Beranda</a></li>
                    <span class="mx-2"> > </span>
                    <li aria-current="page" class="fw-bold" style="color: var(--color-primary);"><?= $current_menu ?></li>
                </ol>
            </nav>
        </div>
        <div class="blog-items content-less">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        <?php if ($articles !== null && !empty($articles)): ?>
                            <?php
                            $counter = 0; // Initialize counter
                            foreach ($articles as $item):
                                if ($counter >= 6) break; // Limit to 6 items
                                $counter++; // Increment counter
                            ?>
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 single-item wow fadeInDown" data-wow-defaul="300ms">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($item['headlines']); ?>">
                                                <?php if (isset($item['img'])): ?>
                                                    <img src="<?= SERVER_NAME . htmlspecialchars($item['img']); ?>" alt="Thumb"
                                                        style="width: 100%; height: 200px; object-fit: cover;">
                                                <?php endif; ?>
                                            </a>
                                            <div class="date"><strong><?= date('d', strtotime($item['created_at'])) ?></strong> <span><?= date('M', strtotime($item['created_at'])) ?></span></div>
                                        </div>
                                        <div class="info">
                                            <h4
                                                class="overflow-hidden"
                                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($item['headlines']); ?>" aria-label="<?= htmlspecialchars($item['headlines']); ?>">
                                                    <?= htmlspecialchars($item['headlines']); ?>
                                                </a>
                                            </h4>
                                            <p
                                                class="overflow-hidden"
                                                style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                <?= htmlspecialchars($item['content'] ?? 'No description available.'); ?>
                                            </p>
                                            <a class="btn circle btn-theme-border btn-sm" href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($item['headlines']); ?>">
                                                Lihat Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No articles available or there was an error fetching the news.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <?php if ($page > 1): ?>
                                        <li class="page-item"><a class="page-link" href="<?= SERVER_NAME . 'article/' . $page - 1; ?>"><i class="fas fa-angle-double-left"></i></a></li>
                                    <?php endif; ?>

                                    <?php if ($totalPages > 1): ?>
                                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                            <li class="page-item <?= ($i == $page || ($i == $totalPages && $page == $totalPages)) ? 'active' : ''; ?>"><a class="page-link" href="<?= SERVER_NAME . 'article/' . $i; ?>" aria-label="<?= $i; ?>"><?= $i; ?></a></li>
                                        <?php endfor; ?>
                                    <?php endif; ?>

                                    <?php if ($page < $totalPages): ?>
                                        <li class="page-item"><a class="page-link" href="<?= SERVER_NAME . 'article/' . $page + 1; ?>"><i class="fas fa-angle-double-right"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->