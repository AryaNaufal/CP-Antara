<?php

namespace Aryan\CpAntara\Model;

class ProductModel
{
    private $filePath;

    public function __construct($filePath = '/public/Data/productData.json')
    {
        $this->filePath = __DIR__ . '/../..' . $filePath;
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
}
