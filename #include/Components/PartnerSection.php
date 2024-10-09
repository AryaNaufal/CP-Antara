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
                        <div class="partner-carousel owl-carousel owl-theme">
                            <?php
                            $count = 0;
                            foreach ($mitras as $mitra):
                                if ($count >= count($mitras)) break;
                                $count++;
                            ?>
                                <img src="<?= htmlspecialchars($mitra['image']) ?>" alt="Partner" class="w-100">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->