<!-- Star Clients Area -->
<section class="clients-style-one-area inc-border default-padding-top text-center bg-gray" id="product">
	<div class="site-heading text-center wow fadeInDown">
		<h2>Produk</h2>
		<div class="devider"></div>
	</div>
	<div class="container">
		<div class="clients-style-one-box">
			<div class="row flex-row flex-nowrap">
				<div class="col-md-12 gallery-content">
					<div class="magnific-mix-gallery masonary product-carousel owl-carousel owl-theme">
						<!-- Single Item -->
						<?php
						$count = 0;
						foreach ($products as $product):
							if ($count >= 4) {
								break;
							}
							$count++;
						?>
							<div id="portfolio-grid" class="gallery-items d-flex flex-row flex-nowrap">
								<div class="pf-item d-flex flex-column" style="margin: 0 5px; transition: transform 0.3s;">
									<div class="overlay wow fadeInUp shadow-sm" data-wow-delay="<?= $product['id'] * 100 ?>ms">
										<div style="display: flex; width: auto; height: 160px;">
											<img src='<?= $product['image'] ?>' alt="thumb" style="object-fit: contain; padding: 0 40px; width: 100%; height: 100%;">
										</div>
										<div class="content" style="text-align: left; bottom: 20px;">
											<div class="title" style="margin-bottom: 0px;">
												<span>Product</span>
												<h5>
													<a href="<?= SERVER_NAME . "product/" . $Lib->seoTitle($product['slug']) ?>" aria-label="<?= $product['name'] ?>">
														<?= $product['name'] ?>
													</a>
												</h5>
											</div>
											<a href="<?= SERVER_NAME . "product/" . $Lib->seoTitle($product['slug']) ?>">Details</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!-- End Single Item -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="default-padding" style="display: flex; justify-content: center;">
		<!-- Start Atribute Navigation -->
		<div class="wow fadeInDown" style="background-color: var(--color-primary); padding: 10px 20px; border-radius: 5px; width: max-content;">
			<ul>
				<li class="button">
					<a href="<?= SERVER_NAME ?>product" style="color: white;">Lihat Semua</a>
				</li>
			</ul>
		</div>
		<!-- End Atribute Navigation -->
	</div>
</section>
<!-- End Clients -->