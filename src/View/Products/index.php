<!-- Start Gallery
    ============================================= -->
<section class="gallery-area default-padding default-padding-top">
	<div class="container-full">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class=""><a href="/">Home</a></li>
					<span class="mx-2"> > </span>
					<li aria-current="page" style="font-weight: 600; color: #AA0A2F;"><?= $model['title'] ?></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-12 gallery-content">
				<div class="magnific-mix-gallery masonary">
					<div id="portfolio-grid" class="gallery-items colums-4">

						<!-- Single Item -->
						<?php foreach ($model['products'] as $product) : ?>
							<div class="pf-item">
								<div class="overlay wow fadeInUp" data-wow-delay="100ms">
									<div style="display: flex; width: auto; height: 200px;">
										<img src='<?= $product['image'] ?>' alt="thumb" style="object-fit: contain; padding: 0 40px">
									</div>
									<div class="content">
										<div class="title">
											<span>Product</span>
											<h5>
												<a href="/product/<?= $product['slug'] ?>">
													<?= $product['name'] ?>
												</a>
											</h5>
										</div>
										<a href="/product/<?= $product['slug'] ?>">
											Details
										</a>
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
</section>
<!-- End Gallery -->