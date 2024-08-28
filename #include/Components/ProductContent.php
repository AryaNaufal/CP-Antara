<?php if (!empty($productData)): ?>
    <section class="clients-style-one-area inc-border default-padding-top text-center bg-gray" id="product" style="overflow: hidden;">
        <h1><?= htmlspecialchars($productData['id']); ?></h1>
        <h1><?= htmlspecialchars($productData['name']); ?></h1>
        <h1><?= htmlspecialchars($productData['image']); ?></h1>
    </section>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>