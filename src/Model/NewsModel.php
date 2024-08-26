<?php

namespace Aryan\CpAntara\Model;

class NewsModel
{
  private $apiKey = 'API-KEY';
  private $baseUrl = 'https://newsapi.org/v2/everything';

  public function getTopHeadlines()
  {
    // $url = $this->baseUrl . "?q=apple&from=2024-08-01&to=2024-08-26&sortBy=popularity&apiKey=" . $this->apiKey;
    $url = "https://berita-indo-api-next.vercel.app/api/antara-news/terkini";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true); // Menyertakan header dalam output
    curl_setopt($ch, CURLOPT_NOBODY, false); // Menyertakan body dalam output

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($httpCode !== 200) {
      // Tangani kesalahan HTTP di sini
      return null;
    }

    // Pisahkan header dari body jika diperlukan
    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    return json_decode($body, true);
  }
}
