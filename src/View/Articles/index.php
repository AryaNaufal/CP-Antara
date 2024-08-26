<!-- Start Blog
    ============================================= -->
<section class="blog-area full-blog blog-standard full-blog grid-colum default-padding default-padding-top">
  <div class="container">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class=""><a href="/">Home</a></li>
          <span class="mx-2"> > </span>
          <li aria-current="page" style="font-weight: 600; color: #AA0A2F;"><?= $model['title'] ?></li>
        </ol>
      </nav>
    </div>
    <div class="blog-items content-less">
      <div class="blog-content">
        <div class="blog-item-box">
          <div class="row">
            <?php if ($model['articles'] !== null && !empty($model['articles'])): ?>
              <?php foreach ($model['articles'] as $article): ?>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item wow fadeInDown" data-wow-defaul="300ms">
                  <div class="item">
                    <div class="thumb">
                      <a href="<?= htmlspecialchars($article['link']); ?>">
                        <?php if (isset($article['image'])): ?>
                          <img
                            src="<?= htmlspecialchars($article['image']); ?>"
                            alt="Thumb"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <?php endif; ?>
                      </a>
                      <div class="date"><strong>24</strong> <span>Sep</span></div>
                    </div>
                    <div class="info">
                      <div class="meta">
                        <ul>
                          <li>
                            <a href="#"><i class="fas fa-user"></i><?= $article['author'] ?? 'Unknown' ?></a>
                          </li>
                          <li>
                            <a href="#"><i class="fas fa-comments"></i> 27 Comments</a>
                          </li>
                        </ul>
                      </div>
                      <h4 style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                        <a href="<?= htmlspecialchars($article['link']); ?>">
                          <?= htmlspecialchars($article['title']); ?>
                        </a>
                      </h4>
                      <p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                        <?= htmlspecialchars($article['description'] ?? 'No description available.'); ?>
                      </p>
                      <a class="btn circle btn-theme-border btn-sm" href="<?= htmlspecialchars($article['link']); ?>">Read More</a>
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
                  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
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