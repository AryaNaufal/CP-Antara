<!-- Star Clients Area
    ============================================= -->
<section class="clients-style-one-area inc-border default-padding default-padding-top text-center" id="partner">
    <div class="site-heading text-center wow fadeInDown">
        <h2>Mitra</h2>
        <div class="devider"></div>
    </div>
    <div class="clients-style-one-area text-center">
        <div class="container">
            <div class="clients-style-one-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mitra-carousel owl-carousel owl-theme" id="mitra-carousel">
                            <?php
                            $midpoint = ceil(count($mitras) / 2);
                            for ($i = 0; $i < $midpoint; $i++):
                                if (!isset($mitras[$i])) break;
                            ?>
                                <img src="<?= htmlspecialchars($mitras[$i]['image']) ?>" alt="Partner" class="w-100">
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mitra-carousel owl-carousel owl-theme" id="mitra-carousel2">
                            <?php
                            for ($i = $midpoint; $i < count($mitras); $i++):
                                if (!isset($mitras[$i])) break;
                            ?>
                                <img src="<?= htmlspecialchars($mitras[$i]['image']) ?>" alt="Partner" class="w-100">
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->