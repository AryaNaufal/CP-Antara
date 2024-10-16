<?php
if (!isset($_SESSION['chat_history'])) {
  $_SESSION['chat_history'] = [];
}
?>

<i id="helpDeskButton" class="fas fa-comment-alt-dots fs-5"></i>

<div id="chatContainer">
  <h2 class="chatbotHeading">
    Selamat datang di layanan chat
    <span class="fw-bolder">IMCS.</span>
  </h2>
  <?php if (empty($_SESSION['chat_name']) || empty($_SESSION['chat_email'])): ?>
    <div class="text-center" style="height: 300px; padding: 10px">
      <form action="http://localhost/CP-Antara/chatbot/chatbot.php" method="get" class="d-flex flex-column gap-3 h-100 justify-content-between">
        <div class="d-flex flex-column gap-3">
          <input type="text" name="name" placeholder="Nama:" autocomplete="off" class="rounded-3 px-2" required>
          <input type="email" name="email" placeholder="Email:" autocomplete="off" class="rounded-3 px-2" required>
        </div>
        <button id="nextButton" type="submit" name="nextButton">Lanjutkan</button>
      </form>
    </div>
  <?php else: ?>
    <div id="chat">
      <?php
      // Menampilkan chat history
      foreach ($_SESSION['chat_history'] as $message) {
        echo $message;
      }
      ?>

      <div class='d-flex items-center' style="align-self: flex-start; align-items: baseline; margin: 5px 0;">
        <img src='https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg' class='avatar' alt='Bot Avatar'>
        <div class="text-white" style="background-color: var(--color-primary); color: white; border-radius: 5px; padding: 10px; margin: 5px;">
          Terimakasih telah menghubungi kami. Ada yang bisa kami bantu?<br><br>
          Anda dapat memperoleh informasi dengan memilih topik dibawah ini:<br><br>
          <ol>
            <li>
              Informasi Produk/Layanan
            </li>
            <li>
              Form Pengaduan
            </li>
          </ol>
          Silahkan pilih dengan mengetik angka pada daftar menu di atas atau ketik Batal untuk membatalkan permintaan.
        </div>

        <!-- <div class="text-white" style="background-color: var(--color-primary); color: white; border-radius: 5px; padding: 10px; margin: 5px;">
          Informasi Porduk/Layanan:<br><br>
          <ol>
            <li>
              Antaranews.com
            </li>
            <li>
              Antara Foto
            </li>
            <li>
              Antara TV
            </li>
            <li>
              IMCS
            </li>
            <li>
              BRANDA
            </li>
            <li>
              Lembaga Pendidikan Antara
            </li>
            <li>
              M.I.C.E
            </li>
            <li>
              Layanan Analisa & Informasi
            </li>
            <li>
              Bloomberg
            </li>
            <li>
              Reuters
            </li>
            <li>
              Sewa Perangkat Keras
            </li>
            <li>
              HCM Ads Media
            </li>
          </ol>
          Silahkan pilih dengan mengetik angka pada daftar menu di atas atau tekan 0 untuk kembali ke menu awal
        </div> -->
      </div>

    </div>
    <div style="display: flex; align-items: baseline; margin: 5px;">
      <input type="text" id="userInput" placeholder="Ketik pesan Anda..." autocomplete="off">
      <button id="sendButton">Kirim</button>
    </div>
  <?php endif; ?>
</div>