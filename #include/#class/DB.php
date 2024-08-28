<?php

namespace App;

class DB
{
    private $filePath;

    public function __construct($filePath = 'Data/productData.json')
    {
        $this->filePath = __DIR__ . '/../' . $filePath;
    }
    public function getProducts()
    {
        // Membaca file JSON
        $data = file_get_contents($this->filePath);

        // Decode JSON menjadi array PHP
        $decodedData = json_decode($data, true);

        // Cek jika decoding berhasil
        if (json_last_error() === JSON_ERROR_NONE) {
            return $decodedData;
        } else {
            return [
                'products' => [],
                'error' => 'Error decoding JSON.'
            ];
        }
    }
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
