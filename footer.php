<?php include_once __DIR__ . '/#include/component/layout/footer.php'; ?>

<!-- jQuery Frameworks
  ============================================= -->

<?php foreach ($jsAssets as $asset): ?>
  <script src="<?= SERVER_NAME . htmlspecialchars($asset['url']) ?>"></script>
<?php endforeach; ?>

</body>

</html>