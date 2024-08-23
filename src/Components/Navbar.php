<!-- Start Navigation -->
<nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed white " id="nav">


  <div class="container d-flex justify-content-between align-items-center">

    <!-- Start Header Navigation -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="/">
        <!-- <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
        <img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo"> -->
        <img src="/assets/img/antara/logo-light.png" class="logo logo-display" alt="Logo">
        <img src="/assets/img/antara/logo.png" class="logo logo-scrolled" alt="Logo">
      </a>
    </div>
    <!-- End Header Navigation -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">

      <img src="/assets/img/antara/logo.png" alt="Logo">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-times"></i>
      </button>

      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li>
          <a class="smooth-menu" href="#home">Home</a>
        </li>
        <li>
          <a class="smooth-menu" href="#about">Tentang Kami</a>
        </li>
        <li>
          <a class="smooth-menu" href="#product">Produk & Layanan</a>
        </li>
        <li>
          <a class="smooth-menu" href="#partner">Mitra Kerja</a>
        </li>
        <li>
          <a class="smooth-menu" href="#article">Publikasi</a>
        </li>
        <li>
          <a class="smooth-menu" href="#footer">Kontak Kami</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <div class="attr-right">
      <!-- Start Atribute Navigation -->
      <div style="background-color: #AA0A2F;  padding: 10px 20px; border-radius: 5px;">
        <ul>
          <li class="button"><a href="#" style="color: white;">Pertanyaan</a></li>
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


<script>
  const navbar = document.getElementById('nav');

  if (window.location.pathname === '/') {
    navbar.classList.add('no-background');
  } else {
    navbar.classList.remove('no-background');
  }
</script>