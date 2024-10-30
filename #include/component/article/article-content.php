<!-- Start Blog
    ============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding-top default-padding">
  <div class="container">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class=""><a href="<?= SERVER_NAME ?>">Beranda</a></li>
          <span class="mx-2"> > </span>
          <li class=""><a href="<?= SERVER_NAME . "article" ?>">Artikel</a></li>
          <span class="mx-2"> > </span>
          <li aria-current="page" style="font-weight: 600; color: var(--color-primary); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 300px;"><?= $current_menu ?></li>
        </ol>
      </nav>
    </div>
    <div class="blog-items">
      <div class="row">
        <div class="blog-content wow fadeInUp col-lg-8 col-md-12">
          <div class="item">
            <div class="blog-item-box">
              <div class="thumb">
                <a href="#"><img src="<?= SERVER_NAME . $articleData['img'] ?>" alt="Thumb" class="w-100"></a>
                <div class="date"><strong><?= date('d', strtotime($articleData['created_at'])) ?></strong> <span><?= date('M', strtotime($articleData['created_at'])) ?></span></div>
              </div>
              <div class="info">
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Admin</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                    </li>
                  </ul>
                </div>
                <h3>
                  <a href="#" title="<?= $articleData['headlines'] ?>"><?= $articleData['headlines'] ?></a>
                </h3>
                <div class="content">
                  <p><?= $articleData['content'] ?></p>
                </div>

              </div>
            </div>
          </div>

          <!-- Start Post Pagination -->
          <div class="post-pagi-area">
            <?php
            $previousArticle = null;
            $nextArticle = null;
            foreach ($articles as $key => $article) {
              if ($article['headlines'] === $articleData['headlines']) {
                $previousArticle = isset($articles[$key - 1]) ? $articles[$key - 1] : null;
                $nextArticle = isset($articles[$key + 1]) ? $articles[$key + 1] : null;
                break;
              }
            }
            ?>

            <?php if (isset($previousArticle)): ?>
              <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($previousArticle['headlines']); ?>" style="max-width: 200px;">
                <i class="fas fa-angle-double-left"></i> Previous Post
                <h5 style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= htmlspecialchars($previousArticle['headlines']); ?></h5>
              </a>
            <?php endif; ?>
            <?php if (isset($nextArticle)): ?>
              <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($nextArticle['headlines']); ?>" style="max-width: 200px;">
                Next Post <i class="fas fa-angle-double-right"></i>
                <h5 style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= htmlspecialchars($nextArticle['headlines']); ?></h5>
              </a>
            <?php endif; ?>
          </div>
          <!-- End Post Pagination -->


          <!-- Start Blog Comment -->
          <div class="blog-comments mt-4" style="border-top: 1px solid #e7e7e7;">
            <div class="comments-area">
              <div class="comments-title">
                <h4>
                  5 comments
                </h4>
                <div class="comments-list">
                  <div class="commen-item">
                    <div class="avatar">
                      <img src="https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg" alt="Author">
                    </div>
                    <div class="content">
                      <div class="title">
                        <h5>Jonathom Doe</h5>
                        <span>28 Aug, 2022</span>
                      </div>
                      <p>
                        Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. Met packages shy for kindness.
                      </p>
                      <div class="comments-info">
                        <a href=""><i class="fa fa-reply"></i>Reply</a>
                      </div>
                    </div>
                  </div>
                  <div class="commen-item reply">
                    <div class="avatar">
                      <img src="https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg" alt="Author">
                    </div>
                    <div class="content">
                      <div class="title">
                        <h5>Spart Lee</h5>
                        <span>17 Feb, 2022</span>
                      </div>
                      <p>
                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off.
                      </p>
                      <div class="comments-info">
                        <a href=""><i class="fa fa-reply"></i>Reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comments-form">
                <div class="title">
                  <h4>Leave a comments</h4>
                </div>
                <form action="#" class="contact-comments">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <!-- Name -->
                        <input name="name" class="form-control" placeholder="Name *" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <!-- Email -->
                        <input name="email" class="form-control" placeholder="Email *" type="email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group comments">
                        <!-- Comment -->
                        <textarea class="form-control" placeholder="Comment"></textarea>
                      </div>
                      <div class="form-group full-width submit">
                        <button type="submit">
                          Post Comments
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Comments Form -->
        </div>
        <!-- Start Sidebar -->
        <div class="sidebar wow fadeInLeft col-lg-4 col-md-12" style="
          position: sticky;
          top: 135px;
          max-height: calc(97vh - 135px);
          overflow-y: auto;
          scrollbar-width: thin;
          scrollbar-color: var(--color-primary) var(--color-background);
          padding-top: 20px;
          padding-bottom: 20px;
        " onscroll="this.style.boxShadow = this.scrollTop === 0 ? '0px -4px 4px -4px rgba(0, 0, 0, 0.3) inset' :  '0px 4px 4px -4px rgba(0, 0, 0, 0.3) inset';">
          <aside>
            <div class="sidebar-item recent-post">
              <div class="title">
                <h4>Recent Post</h4>
              </div>
              <ul>
                <?php foreach (array_slice($articles, -3) as $articleData): ?>
                  <li>
                    <div class="thumb">
                      <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($articleData['headlines']); ?>">
                        <img src="<?= SERVER_NAME . $articleData['img'] ?>" alt="Thumb">
                      </a>
                    </div>
                    <div class="info">
                      <div class="meta-title">
                        <span class="post-date"><?= date('d-m-Y', strtotime($articleData['created_at'])); ?></span>
                      </div>
                      <a href="<?= SERVER_NAME . "article/" . $Lib->seoTitle($articleData['headlines']); ?>" title="<?= $articleData['headlines'] ?>"><?= $articleData['headlines'] ?></a>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="sidebar-item category">
              <div class="title">
                <h4>category list</h4>
              </div>
              <div class="sidebar-info">
                <ul>
                  <li>
                    <a href="#">national <span>69</span></a>
                  </li>
                  <li>
                    <a href="#">national <span>25</span></a>
                  </li>
                  <li>
                    <a href="#">sports <span>18</span></a>
                  </li>
                  <li>
                    <a href="#">megazine <span>37</span></a>
                  </li>
                  <li>
                    <a href="#">health <span>12</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="sidebar-item tags">
              <div class="title">
                <h4>tags</h4>
              </div>
              <div class="sidebar-info">
                <ul>
                  <li><a href="#">Fashion</a>
                  </li>
                  <li><a href="#">Education</a>
                  </li>
                  <li><a href="#">nation</a>
                  </li>
                  <li><a href="#">study</a>
                  </li>
                  <li><a href="#">health</a>
                  </li>
                  <li><a href="#">food</a>
                  </li>
                  <li><a href="#">travel</a>
                  </li>
                  </li>
                </ul>
              </div>
            </div>
          </aside>
        </div>
        <!-- End Start Sidebar -->
      </div>
    </div>
  </div>
</div>
<!-- End Blog -->