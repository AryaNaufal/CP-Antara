<!-- Star Clients Area
    ============================================= -->
<section class="clients-style-one-area inc-border default-padding default-padding-top text-center" id="client">
    <div class="site-heading text-center wow fadeInDown">
        <h2>Klien Kami</h2>
        <div class="devider"></div>
    </div>
    <div class="container">
        <div class="clients-style-one-box">
            <div class="row">
                <div class="col-lg-12 slider">
                    <div class="owl-carousel owl-theme slide-track">
                        <?php
                        $count = 0;

                        // First loop to display the first 8 clients
                        foreach ($clients as $client):
                            if ($count >= 8) break;
                            $count++;
                        ?>
                            <div class="slide" title="<?= htmlspecialchars($client['name']) ?>">
                                    <img src="<?= $client['image'] ?>" alt="Partner">
                            </div>
                        <?php endforeach; ?>

                        <?php
                        $count = 0;

                        // First loop to display the first 8 clients
                        foreach ($clients as $client):
                            if ($count >= 8) break;
                            $count++;
                        ?>
                            <div class="slide" title="<?= htmlspecialchars($client['name']) ?>">
                                    <img src="<?= $client['image'] ?>" alt="Partner">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 slider">
                    <div class="owl-carousel owl-theme slide-track-reverse">
                        <?php
                        $count = 0;

                        // Second loop to display the next 8 clients
                        foreach ($clients as $client):
                            if ($count >= 8) break;
                            $count++;
                        endforeach;

                        for ($i = 8; $i < 16 && $i < count($clients); $i++):
                        ?>
                            <div class="slide" title="<?= htmlspecialchars($clients[$i]['name']) ?>">
                                    <img src="<?= $clients[$i]['image'] ?>" alt="Partner">
                            </div>
                        <?php endfor; ?>

                        <?php
                        $count = 0;

                        // Second loop to display the next 8 clients
                        foreach ($clients as $client):
                            if ($count >= 8) break;
                            $count++;
                        endforeach;

                        for ($i = 8; $i < 16 && $i < count($clients); $i++):
                        ?>
                            <div class="slide" title="<?= htmlspecialchars($clients[$i]['name']) ?>">
                                    <img src="<?= $clients[$i]['image'] ?>" alt="Partner">
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->