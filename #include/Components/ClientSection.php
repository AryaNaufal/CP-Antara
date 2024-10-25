<!-- Star Clients Area
    ============================================= -->
<section class="clients-style-one-area inc-border default-padding default-padding-top text-center bg-gray" id="client">
    <div class="site-heading text-center wow fadeInDown">
        <h2>Klien</h2>
        <div class="devider"></div>
    </div>
    <div class="clients-style-one-area text-center">
        <div class="container">
            <div class="clients-style-one-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-carousel owl-carousel owl-theme" id="client-carousel">
                            <?php
                            $midpoint = ceil(count($clients) / 2);
                            for ($i = 0; $i < $midpoint; $i++):
                                if (!isset($clients[$i])) break;
                            ?>
                                <img src="<?= htmlspecialchars($clients[$i]['image']) ?>" alt="Partner" class="w-100">
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-carousel owl-carousel owl-theme" id="client-carousel2">
                            <?php
                            for ($i = $midpoint; $i < count($clients); $i++):
                                if (!isset($clients[$i])) break;
                            ?>
                                <img src="<?= htmlspecialchars($clients[$i]['image']) ?>" alt="Partner" class="w-100">
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->