<!-- Start Blog 
    ============================================= -->
<section id="article" class="blog-area default-padding default-padding-top default-padding-bottom">
  <div class="container">
    <div class="row wow fadeInDown">
      <div class="col-lg-8 offset-lg-2">
        <div class="site-heading text-center">
          <h2>Publikasi Terkini</h2>
          <div class="devider"></div>
          <p>
            Kami menghadirkan publikasi terkini yang informatif dan relevan untuk mendukung pemahaman Anda terhadap isu-isu terkini.
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <?php
      if (empty($articles)):
        echo '<p class="text-center">No articles available.</p>';
      else:
        $count = 0;
        foreach ($articles as $item):
          if ($count >= 3) {
            break;
          }
          $count++;

      ?>
          <!-- Single item -->
          <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-defaul="300ms">
            <div class="item">
              <div class="thumb">
                <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($item['headlines']); ?>"><img src="<?= $item['img'] ?>" alt="Thumb"></a>
                <div class="date"><strong><?= date('d', strtotime($item['created_at'])) ?></strong> <span><?= date('M', strtotime($item['created_at'])) ?></span></div>
              </div>
              <div class="info">
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user-circle"></i> User</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                    </li>
                  </ul>
                </div>
                <h4 style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                  <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($item['headlines']); ?>" aria-label="<?= $item['headlines'] ?>"><?= $item['headlines'] ?></a>
                </h4>
                <p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                  <?= htmlspecialchars($item['content'] ?? 'No description available.') ?>
                </p>
              </div>
            </div>
          </div>
          <!-- End Single item -->
        <?php endforeach; ?>
      <?php endif; ?>

      <div style="display: flex; justify-content: center">
        <!-- Start Atribute Navigation -->
        <div class="wow fadeInUp" style="background-color: var(--color-primary);  padding: 10px 20px; border-radius: 5px; width: max-content;">
          <ul>
            <li class="button"><a href="<?php SERVER_NAME ?>article" style="color: white;">Lihat Semua</a></li>
          </ul>
        </div>
        <!-- End Atribute Navigation -->
      </div>
      <!-- Main Nav -->
    </div>
  </div>
</section>
<!-- End Blog -->