<?php include __DIR__ . '/#include/Components/Footer.php'; ?>

<!-- jQuery Frameworks
  ============================================= -->

<?php foreach ($jsAssets as $asset): ?>
  <script src="<?= SERVER_NAME . htmlspecialchars($asset['url']) ?>"></script>
<?php endforeach; ?>

</body>

</html>