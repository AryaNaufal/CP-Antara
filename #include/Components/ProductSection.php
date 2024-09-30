<!-- Star Clients Area
    ============================================= -->
<section class="clients-style-one-area inc-border default-padding-top text-center bg-gray" id="product">
	<div class="site-heading text-center wow fadeInDown">
		<h2>Produk Kami</h2>
		<div class="devider"></div>
	</div>
	<div class="container">
		<div class="clients-style-one-box">
			<div class="row">
				<div class="col-lg-12 slider">
					<div class="owl-carousel owl-theme slide-track">
						<?php
						$count = 0;

						foreach ($products as $product):
							if ($count >= 5) break;
							$count++;
						?>
							<div class="slide">
								<a href="<?= SERVER_NAME . "product/" . $Lib->seo_title($product['slug']) ?>">
									<img src="<?= $product['image'] ?>" alt="Partner">
								</a>
							</div>
						<?php endforeach; ?>

						<?php
						$count = 0;

						foreach ($products as $product):
							if ($count >= 5) break;
							$count++;
						?>
							<div class="slide">
								<a href="<?= SERVER_NAME . "product/" . $Lib->seo_title($product['slug']) ?>">
									<img src="<?= $product['image'] ?>" alt="Partner">
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="default-padding" style="display: flex; justify-content: center">
		<!-- Start Atribute Navigation -->
		<div class="wow fadeInDown" style="background-color: #AA0A2F;  padding: 10px 20px; border-radius: 5px; width: max-content;">
			<ul>
				<li class="button"><a href="<?php SERVER_NAME ?>product" style="color: white;">See More</a></li>
			</ul>
		</div>
		<!-- End Atribute Navigation -->
	</div>
</section>
<!-- End Clients -->