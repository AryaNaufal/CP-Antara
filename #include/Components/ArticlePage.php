<!-- Start Blog
    ============================================= -->
<section class="blog-area full-blog blog-standard full-blog grid-colum default-padding default-padding-top">
    <div class="container">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class=""><a href="<?= SERVER_NAME ?>">Home</a></li>
                    <span class="mx-2"> > </span>
                    <li aria-current="page" style="font-weight: 600; color: var(--color-primary);"><?= $current_menu ?></li>
                </ol>
            </nav>
        </div>
        <div class="blog-items content-less">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        <?php if ($articleData !== null && !empty($articleData)): ?>
                            <?php foreach ($articleData as $item): ?>
                                <?php
                                $dateString = $item['isoDate'];
                                $date = new DateTime($dateString);
                                $Month = $date->format('M');
                                $Day = $date->format('d');
                                ?>
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 single-item wow fadeInDown" data-wow-defaul="300ms">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="<?= htmlspecialchars($item['link']); ?>" target="_blank">
                                                <?php if (isset($item['image'])): ?>
                                                    <img src="<?= htmlspecialchars($item['image']); ?>" alt="Thumb"
                                                        style="width: 100%; height: 200px; object-fit: cover;">
                                                <?php endif; ?>
                                            </a>
                                            <div class="date"><strong><?= $Day ?></strong> <span><?= $Month ?></span></div>
                                        </div>
                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-user"></i><?= htmlspecialchars($item['author'] ?? 'Unknown') ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-comments"></i> 27 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4
                                                style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                <a href="<?= htmlspecialchars($item['link']); ?>" target="_blank" aria-label="<?= htmlspecialchars($item['title']); ?>">
                                                    <?= htmlspecialchars($item['title']); ?>
                                                </a>
                                            </h4>
                                            <p
                                                style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                <?= htmlspecialchars($item['description'] ?? 'No description available.'); ?>
                                            </p>
                                            <a class="btn circle btn-theme-border btn-sm" href="<?= htmlspecialchars($item['link']); ?>" target="_blank">
                                                Read More
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

                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <li class="page-item <?= ($i === $page) ? 'active' : ''; ?>"><a class="page-link" href="<?= SERVER_NAME . 'article/' . $i; ?>" aria-label="<?= $i; ?>"><?= $i; ?></a></li>
                                    <?php endfor; ?>

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