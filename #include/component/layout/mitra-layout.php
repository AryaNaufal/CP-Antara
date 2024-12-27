<section class="mitra-area default-padding default-padding-top text-center" id="mitra">
  <div class="container">
    <div class="site-heading text-center wow fadeInDown">
      <h2>Mitra Kami</h2>
      <div class="devider"></div>
    </div>
    <div class="row">
      <?php foreach ($mitras as $mitra): ?>
        <div style="margin-bottom: 50px;" class="col-lg-3 col-md-4 col-sm-6">
          <div class="mitra-box">
            <img src="<?= htmlspecialchars($mitra['image']) ?>" alt="<?= htmlspecialchars($mitra['name']) ?>" class="img-fluid wow fadeInUp" data-wow-delay="<?= $mitra['id'] * 100 ?>ms">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>