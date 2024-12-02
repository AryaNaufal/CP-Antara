<?php include_once __DIR__ . '/#include/component/layout/footer-layout.php'; ?>

<!-- jQuery Frameworks
  ============================================= -->

<?php foreach ($jsAssets as $asset): ?>
  <script src="<?= SERVER_NAME . htmlspecialchars($asset['url']) ?>"></script>
<?php endforeach; ?>

</body>

</html>



<script>
  const navbar = document.getElementById('nav');

  <?php
  $newUrl = str_replace(SERVER_NAME, '', $_SERVER['REQUEST_URI']);
  ?>

  function toggleSound() {
    var video = document.getElementById('background-video');
    video.muted = !video.muted;
  }

  document.getElementById('sound-button').addEventListener('click', function() {
    if (this.innerText == '🔊') {
      document.cookie = "mute=1";
      this.innerText = '🔇';
    } else {
      document.cookie = "mute=0";
      this.innerText = '🔊';
    }
  });
</script>