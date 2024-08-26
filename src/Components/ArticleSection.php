<!-- Start Blog 
    ============================================= -->
<section id="article" class="blog-area default-padding default-padding-top bottom-less bg-gray">
  <div class="container">
    <div class="row wow fadeInDown">
      <div class="col-lg-8 offset-lg-2">
        <div class="site-heading text-center">
          <h2>Latest Articles</h2>
          <div class="devider"></div>
          <p>
            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
          </p>
        </div>
      </div>
    </div>

    <div class="row">

      <?php
      $count = 0;
      foreach ($model['articles'] as $article):
        if ($count >= 3) break;
        $count++;
      ?>
        <!-- Single item -->
        <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-defaul="300ms">
          <div class="item">
            <div class="thumb">
              <a href="/article/Judul1"><img src="<?= $article['image'] ?>" alt="Thumb"></a>
              <div class="date"><strong>18</strong> <span>Apr</span></div>
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
              <h4>
                <a href="/article/Judul1"><?= $article['title'] ?></a>
              </h4>
              <p>
                <?= $article['description'] ?? 'No description available.' ?>
              </p>
            </div>
          </div>
        </div>
        <!-- End Single item -->
      <?php endforeach; ?>

      <div style="display: flex; justify-content: center">
        <!-- Start Atribute Navigation -->
        <div class="wow fadeInUp" style="background-color: #AA0A2F;  padding: 10px 20px; border-radius: 5px; width: max-content;">
          <ul>
            <li class="button"><a href="/articles" style="color: white;">See More</a></li>
          </ul>
        </div>
        <!-- End Atribute Navigation -->
      </div>
      <!-- Main Nav -->
    </div>
  </div>
</section>
<!-- End Blog -->