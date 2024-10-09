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
                        <div class="partner-carousel owl-carousel owl-theme">
                            <?php
                            $count = 0;
                            foreach ($clients as $client):
                                if ($count >= count($clients)) break;
                                $count++;
                            ?>
                                <img src="<?= htmlspecialchars($client['image']) ?>" alt="Partner" class="w-100">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->