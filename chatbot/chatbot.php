<?php
session_start();

// Mendefinisikan menu level
if (!isset($_SESSION['menu_level'])) {
  $_SESSION['menu_level'] = 0;
}

function getHistoryMessage()
{
  if (isset($_GET['message'])) {
    $userMessage = strtolower(trim($_GET['message']));
    $botResponse = "";

    switch ($_SESSION['menu_level']) {
      case 0: // Menu Utama
        switch ($userMessage) {
          case '1':
            // Menampilkan list informasi produk
            $_SESSION['menu_level'] = 1;
            $botResponse = getProductInfo();
            break;
          case '2':
            $botResponse = "Form Pengaduan belum tersedia saat ini.";
            break;
          case 'batal':
            $botResponse = "Permintaan dibatalkan.";
            exit;
          default:
            $botResponse = getMainMenu();
            break;
        }
        break;

      case 1: // Menu Level 1 - Informasi Produk
        if (is_numeric($userMessage) && $userMessage >= 1 && $userMessage <= 12) {
          $botResponse = getProductDetail($userMessage);
        } elseif ($userMessage === '0') {
          // Kembali ke menu utama
          $_SESSION['menu_level'] = 0;
          $botResponse = getMainMenu();
        } else {
          $botResponse = "Pilihan tidak valid. Silahkan pilih dari daftar produk.";
        }
        break;
    }

    // Memasukkan user message ke chat history
    $_SESSION['chat_history'][] = "<div class='message user-message'><p>$userMessage</p></div>";

    // Memasukkan bot message ke chat history
    $_SESSION['chat_history'][] = "<div class='message bot-message'><img src='https://i.pinimg.com/564x/28/c2/0b/28c20b3bf4e1a48334b2278d3c7fb447.jpg' class='avatar' alt='Bot Avatar'><p>$botResponse</p></div>";

    // Menampilkan respons bot
    echo $botResponse;
  }
}

function getMainMenu()
{
  return "
      Telah menghubungi kami. Ada yang bisa kami bantu?<br><br>
      Anda dapat memperoleh informasi dengan memilih topik di bawah ini:<br><br>
      1. Informasi Produk/Layanan <br>
      2. Form Pengaduan <br><br>
      Silahkan pilih dengan mengetik angka pada daftar menu di atas atau ketik Batal untuk membatalkan permintaan.
  ";
}

function getProductInfo()
{
  return "
      Informasi Produk/Layanan:<br><br>
      1. Antaranews.com <br>
      2. Antara Foto <br>
      3. Antara TV <br>
      4. IMCS <br>
      5. BRANDA <br>
      6. Lembaga Pendidikan Antara <br>
      7. M.I.C.E <br>
      8. Layanan Analisa & Informasi <br>
      9. Bloomberg <br>
      10. Reuters <br>
      11. Sewa Perangkat Keras <br>
      12. HCM Ads Media <br><br>
      Silahkan pilih dengan mengetik angka pada daftar menu di atas atau tekan 0 untuk kembali ke menu awal.
  ";
}

function getProductDetail($productNumber)
{
  $details = [
    '1' => "Antaranews.com: Portal berita terkemuka yang menyediakan berita terkini dan terpercaya.",
    '2' => "Antara Foto: Penyedia layanan fotografi berita dan dokumentasi visual.",
    '3' => "Antara TV: Penyedia layanan streaming berita terkini dan acara langsung.",
    '4' => "IMCS: Penyedia solusi komunikasi multimedia yang inovatif.",
    '5' => "BRANDA: Platform manajemen merek yang membantu perusahaan membangun identitas mereka.",
    '6' => "Lembaga Pendidikan Antara: Menawarkan program pelatihan dan pendidikan profesional.",
    '7' => "M.I.C.E: Menyediakan layanan untuk pertemuan, insentif, konferensi, dan pameran.",
    '8' => "Layanan Analisa & Informasi: Menyediakan analisis data dan informasi pasar yang mendalam.",
    '9' => "Bloomberg: Penyedia informasi finansial dan data pasar global.",
    '10' => "Reuters: Penyedia berita dan informasi terkini dari seluruh dunia.",
    '11' => "Sewa Perangkat Keras: Menawarkan penyewaan perangkat keras untuk berbagai acara.",
    '12' => "HCM Ads Media: Penyedia layanan iklan dan pemasaran digital.",
  ];

  return $details[$productNumber] ?? "Detail produk tidak ditemukan.";
}

getHistoryMessage();

function getChatSession()
{
  if (isset($_GET['nextButton'])) {
    $_SESSION['chat_name'] = $_GET['name'];
    $_SESSION['chat_email'] = $_GET['email'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}

getChatSession();
