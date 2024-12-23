<?php
$menuItems = [
  [
    'title' => 'Beranda',
    'url' => SERVER_NAME,
  ],
  [
    'title' => 'Publikasi',
    'url' => SERVER_NAME . 'article',
  ],
  [
    'title' => 'Produk',
    'url' => SERVER_NAME . 'product',
  ],
  [
    'title' => 'Mitra',
    'url' => SERVER_NAME . '#partner',
  ],
  [
    'title' => 'Klien',
    'url' => SERVER_NAME . '#client',
  ],
  [
    'title' => 'Tentang Kami',
    'url' => SERVER_NAME . '#about',
  ],
  [
    'title' => 'Kontak',
    'url' => SERVER_NAME . 'contact',
  ],
];
?>
<header>
  <!-- Start Navigation -->
  <nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed white" id="nav">

    <div class="container d-flex justify-content-between align-items-center">

      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?= SERVER_NAME ?>">
          <img src="<?= SERVER_NAME ?>assets/img/antara/logo-light.png" class="logo logo-display" alt="Logo">
          <img src="<?= SERVER_NAME ?>assets/img/antara/logo.png" class="logo logo-scrolled" alt="Logo">
        </a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <img src="assets/img/antara/logo.png" alt="Logo">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-times"></i>
        </button>

        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
          <?php foreach ($menuItems as $menuItem): ?>
            <li>
              <?php if ($current_menu == $menuItem['title']): ?>
                <a class="smooth-menu" href="<?= $menuItem['url'] ?>" style="color: var(--color-primary)" aria-label="<?= $menuItem['title'] ?>"><?= $menuItem['title'] ?></a>
              <?php else: ?>
                <a class="smooth-menu" href="<?= $menuItem['url'] ?>" aria-label="<?= $menuItem['title'] ?>"><?= $menuItem['title'] ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
          <li>
            <a class="login-button" href="<?= SERVER_NAME ?>login" style="">
              <?php if (!isset($_SESSION['user_id'])): ?>
                Login
              <?php else: ?>
                Logout
              <?php endif; ?>
            </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->

      <div class="attr-right">
        <!-- Start Atribute Navigation -->
        <div style="background-color: var(--color-primary); padding: 10px 20px; border-radius: 5px;">
          <ul>
            <li class="button">
              <?php if (!isset($_SESSION['user_id'])): ?>
                <a href="<?= SERVER_NAME ?>login" style="color: white;">Masuk</a>
              <?php else: ?>
                <a href="<?= SERVER_NAME ?>logout" style="color: white;">Keluar</a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <!-- End Atribute Navigation -->
      </div>
      <!-- Main Nav -->
    </div>
    <!-- Overlay screen for menu -->
    <div class="overlay-screen"></div>
    <!-- End Overlay screen for menu -->

  </nav>
  <!-- End Navigation -->
</header>